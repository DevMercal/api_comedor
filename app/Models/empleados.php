<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadosFactory> */
    use HasFactory;


    protected $fillable = [
        'nombre_completo',
        'cedula',
        'id_gerencia', 
        'estado',
        'tipo_empleado',
        'cargo'
    ];
}
