<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materia extends Model
{
    /** @use HasFactory<\Database\Factories\MateriaFactory> */
    use HasFactory;

    protected $fillable=[ 'idmateria','nombremateria', 'nivel', 'nombremediano', 'nombrecorto', 'modalidad'];

    public function reticula(): BelongsTo{
        return $this->belongsTo(Reticula::class);
    }
}
