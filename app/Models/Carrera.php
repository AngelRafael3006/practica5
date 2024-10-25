<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carrera extends Model
{
    /** @use HasFactory<\Database\Factories\CarreraFactory> */
    use HasFactory;

    protected $fillable=[ 'idcarrera', 'nombrecarrera', 'nombremediano', 'nombrecorto'];

    public function alumnos(): HasMany
    {
        return $this->hasMany(Alumno::class);
    }

    public function reticulas(): HasMany
    {
        return $this->hasMany(Reticula::class);
    }

    public function depto():BelongsTo{
        return $this->belongsTo(Depto::class);
    }
}
