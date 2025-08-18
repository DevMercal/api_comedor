<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\gerencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
    
        $users = User::with('gerencia')->get();
        
        return response()->json([
            'success' => true,
            'data' => $users
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'id_gerencia' => 'nullable|integer|exists:gerencias,id_gerencia',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_gerencia' => $request->id_gerencia,
        ]);
        return response()->json(['user' => $user], 201);
    }
    public function show($id){
        $registro = User::where('id',$id)->first();
        if (!$registro) {
            return response()->json(['Error' => 'Erro al encontrar usuario'], 404);
        }
        return response()->json($registro, 200);
    }
    public function destroy($id){
        $registro = User::where('id', $id)->delete();
        if (!$registro) {
            return response()->json(['Error' => 'Erro al eliminar usuario'], 404);
        }
        return response()->json($registro, 200);
    }
}
