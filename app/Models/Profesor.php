<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    //relacion de muchos a muchos
    public function clases()
    {
        return $this->belongsToMany(Clase::class);
    }

    public function aulas()
    {
        return $this->belongsToMany(Aula::class);
    }
}