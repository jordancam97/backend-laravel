<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Crea la tabla 'empleados' en la base de datos.
     *
     * Esta función crea la tabla 'empleados' en la base de datos con los siguientes campos:
     * - id: Identificador único del empleado.
     * - nombre: Nombre del empleado.
     * - apellido: Apellido del empleado.
     * - razon_social: Razón social del empleado.
     * - cedula: Número de cédula del empleado.
     * - telefono: Número de teléfono del empleado.
     * - pais: País de residencia del empleado.
     * - ciudad: Ciudad de residencia del empleado.
     * - timestamps: Campos de creación y actualización automática.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $table  Objeto de la tabla.
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('razon_social');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('pais');
            $table->string('ciudad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
