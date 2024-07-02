<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('usuarios', function (){
    $respuesta = \DB::table('usuarios')->get();
    return response()->json($respuesta);
});