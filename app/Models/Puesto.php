<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Puesto extends Model
{
    /** @use HasFactory<\Database\Factories\PuestoFactory> */
    use HasFactory;

    protected $fillable=[ 'idpuesto','nombre', 'tipo'];

    public function personal(): HasMany
    {
        return $this->hasMany(Personal::class);
    }
}
