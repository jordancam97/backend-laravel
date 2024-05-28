<?php

use App\Http\Controllers\Api\EmpleadosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Rutas de la API
 *
 * Define las rutas para la API, incluyendo rutas protegidas y rutas para el controlador de empleados.
 */
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para el controlador de empleados
Route::controller(EmpleadosController::class)->group(function() {
    /**
     * Obtiene todos los empleados
     *
     * @route GET /empleados
     */
    Route::get('/empleados', 'index');

    /**
     * Crea un nuevo empleado
     *
     * @route POST /empleado
     */
    Route::post('/empleado', 'store');

    /**
     * Obtiene un empleado por su ID
     *
     * @route GET /empleado/{id}
     * @param int $id
     */
    Route::get('/empleado/{id}', 'show');

    /**
     * Actualiza un empleado por su ID
     *
     * @route PUT /empleado/{id}
     * @param int $id
     */
    Route::put('/empleado/{id}', 'update');

    /**
     * Elimina un empleado por su ID
     *
     * @route DELETE /empleado/{id}
     * @param int $id
     */
    Route::delete('/empleado/{id}', 'destroy');
});
