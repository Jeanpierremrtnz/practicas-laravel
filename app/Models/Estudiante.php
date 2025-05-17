<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




 class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'email',
        'telefono',
        'programa'
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date'
    ];
}

