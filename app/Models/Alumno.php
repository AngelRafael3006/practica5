<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumno extends Model
{
    /** @use HasFactory<\Database\Factories\AlumnoFactory> */
    use HasFactory;

    protected $fillable=[ 'noctrl','nombrealumno', 'apellidopaterno', 'apellidomaterno', 'sexo'];

    public function carrera(): BelongsTo{
        return $this->belongsTo(Carrera::class);
    }
}
