<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleados::all();
        return $empleados;
    }


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


    public function show($id)
    {
        $empleados = Empleados::find($id);
        return $empleados;
    }


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


    public function destroy($id)
    {
        $empleados = Empleados::destroy($id);
        return $empleados;
    }
}
