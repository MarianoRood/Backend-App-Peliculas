<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;
    protected $table = 'peliculas';
    protected $guarded = [];

    public function director()
    {
        return $this->belongsTo(Directors::class, 'director_id');
    }

    public function categorias()
    {
        return $this->belongsTo(Categories::class, 'categorie_id');
    }
}
