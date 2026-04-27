<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Indicamos el nombre de la tabla (opcional si se llama igual que el modelo en plural)
    protected $table = 'usuarios';

    // Definimos qué campos permitimos llenar masivamente por seguridad
    protected $fillable = [
        'nombre',
        'edad',
        'ocupacion',
        'mensaje',
    ];
}