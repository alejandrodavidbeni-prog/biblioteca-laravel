<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pedido extends Model
{
    protected $fillable = [
        'fecha',
        'estado',
        'editorial_id',
    ];

    protected $casts = [
        'fecha' => 'date',
    ];

    public function editorial(): BelongsTo
    {
        return $this->belongsTo(Editorial::class);
    }

    public function libros(): BelongsToMany
    {
        return $this->belongsToMany(Libro::class);
    }
}
