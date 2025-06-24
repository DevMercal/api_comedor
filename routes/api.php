<?php

use App\Http\Controllers\ExtrasController;
use App\Http\Controllers\GerenciaController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\MetodoPagoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'p1', 'namespace' => 'App\Http\Controllers'], function (){
    Route::apiResource('gerencias', GerenciaController::class);
    Route::apiResource('metodosPagos', MetodoPagoController::class);
    Route::apiResource('menus', MenusController::class);
    Route::apiResource('extras', ExtrasController::class);
    Route::post('extras/bluk', ['uses' => 'ExtrasController@blukStore']);
});