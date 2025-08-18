<?php

namespace App\Http\Controllers;

use App\Models\menus;
use App\Http\Requests\StoremenusRequest;
use App\Http\Requests\UpdatemenusRequest;
use App\Http\Resources\menusResource;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return menus::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremenusRequest $request)
    {
        //
        //dd($request);
        return new menusResource(menus::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $registro = menus::where('id_menu',$id)->first();
        if (!$registro) {
            return response()->json(['Error' => 'Error al encontrar registro'], 404);
        }
        return response()->json($registro, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menus $menus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemenusRequest $request, menus $menus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = menus::where('id_menu', $id)->delete();
        if (!$registro) {
            return response()->json(['Error' => 'Error al eliminar menu'], 404);
        }
        return response()->json($registro, 200);
    }
}
