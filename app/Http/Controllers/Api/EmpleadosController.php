<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Retorna una colección de todos los empleados.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $empleados = Empleados::all();
        return $empleados;
    }

    /**
     * Almacena un nuevo empleado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store(Request $request)
    {
        $empleados = new Empleados();
        $empleados->nombre = $request->nombre;
        $empleados->apellido = $request->apellido;
        $empleados->razon_social = $request->razon_social;
        $empleados->cedula = $request->cedula;
        $empleados->telefono = $request->telefono;
        $empleados->pais = $request->pais;
        $empleados->ciudad = $request->ciudad;

        $empleados->save();
    }

    /**
     * Retorna el empleado con el ID especificado.
     *
     * @param  int  $id
     * @return \App\Models\Empleados
     */
    public function show($id)
    {
        $empleados = Empleados::find($id);
        return $empleados;
    }

    /**
     * Actualiza los datos del empleado especificado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \App\Models\Empleados
     */
    public function update(Request $request, $id)
    {
        $empleados = Empleados::findOrFail($request->id);
        $empleados->nombre = $request->nombre;
        $empleados->apellido = $request->apellido;
        $empleados->razon_social = $request->razon_social;
        $empleados->cedula = $request->cedula;
        $empleados->telefono = $request->telefono;
        $empleados->pais = $request->pais;
        $empleados->ciudad = $request->ciudad;

        $empleados->save();
        return $empleados;
    }

    /**
     * Elimina el empleado con el ID especificado.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        $empleados = Empleados::destroy($id);
        return $empleados;
    }
}
