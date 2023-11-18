<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funciones extends Model
{
    use HasFactory;
    protected $table = 'funciones';
    protected $guarded = [];

    public function peliculas()
    {
        return $this->belongsTo(Peliculas::class, 'pelicula_id');
    }

    public function salas()
    {
        return $this->belongsTo(Salas::class, 'sala_id');
    }
}
