<?php

use App\Http\Controllers\Api\EmpleadosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(EmpleadosController::class)->group(function(){
    Route::get('/empleados', 'index');
    Route::post('/empleado', 'store');
    Route::get('/empleado/{id}', 'show');
    Route::put('/empleado/{id}', 'update');
    Route::delete('/empleado/{id}', 'destroy');
});