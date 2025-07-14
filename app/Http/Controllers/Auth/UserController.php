<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\gerencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    //
    public function index()
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
}
