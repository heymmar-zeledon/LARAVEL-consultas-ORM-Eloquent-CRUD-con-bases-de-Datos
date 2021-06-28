<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;

    public function profesors()
    {
        return $this->belongsToMany(Profesor::class,'profesor_aula_clase')->withPivot('id_aula');
    }

    public function aulas()
    {
        return $this->belongsToMany(Aula::class,'profesor_aula_clase')->withPivot('id_profesor');
    }
}
