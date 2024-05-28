<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase Empleados
 *
 * Representa un empleado en el sistema. Esta clase utiliza Eloquent ORM para interactuar con la base de datos.
 * Los campos 'fillable' especifican qué atributos son asignables en masa.
 *
 * @package App\Models
 */
class Empleados extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'razon_social',
        'cedula',
        'telefono',
        'pais',
        'ciudad',
    ];
}
