<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Personal extends Model
{
    /** @use HasFactory<\Database\Factories\PersonalFactory> */
    use HasFactory;

    protected $fillable=[ 'RFC', 'nombres', 'apellidop', 'apellidom',
    'licenciatura', 'lictit', 'especializacion', 'esptit', 'maestria',
    'maetit', 'doctorado', 'doctit', 'fechaingsep', 'fechaingins'];

    public function personalPlazas(): HasMany
    {
        return $this->hasMany(PersonalPlaza::class);
    }

    public function puesto():BelongsTo{
        return $this->belongsTo(Puesto::class);
    }

    public function depto():BelongsTo{
        return $this->belongsTo(Depto::class);
    }
    public function plazas()
{
    return $this->hasMany(Plaza::class);
}



}
