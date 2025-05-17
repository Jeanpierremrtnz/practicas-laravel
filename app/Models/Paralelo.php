<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paralelo extends Model
{
    use HasFactory; // ¡Esta línea es crucial!

    protected $fillable = [
        'nombre',
        'horario',
        'aula'
    ];
}