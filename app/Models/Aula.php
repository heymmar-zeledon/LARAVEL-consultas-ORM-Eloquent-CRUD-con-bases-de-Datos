<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    public function profesors()
    {
        return $this->belongsToMany(Profesor::class);
    }

    public function clases()
    {
        return $this->belongsToMany(Clase::class);
    }
}
