<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriasAbiertas extends Model
{
    /** @use HasFactory<\Database\Factories\MateriasAbiertasFactory> */
    use HasFactory;

    protected $fillable=['materia_id', 'carrera_id', 'periodo_id'];
}
