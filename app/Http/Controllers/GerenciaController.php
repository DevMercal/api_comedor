<?php

namespace App\Http\Controllers;

use App\Models\gerencia;
use App\Http\Requests\StoregerenciaRequest;
use App\Http\Requests\UpdategerenciaRequest;

class GerenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return gerencia::all();
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
    public function store(StoregerenciaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(gerencia $gerencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gerencia $gerencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategerenciaRequest $request, gerencia $gerencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gerencia $gerencia)
    {
        //
    }
}
