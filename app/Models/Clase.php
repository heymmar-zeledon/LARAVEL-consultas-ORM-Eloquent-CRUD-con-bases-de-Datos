<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','update_at'];
    public function profesors()
    {
        return $this->belongsToMany(Profesor::class,'profesor_aula_clase')->withPivot('aula_id','id');
    }

    public function aulas()
    {
        return $this->belongsToMany(Aula::class,'profesor_aula_clase')->withPivot('profesor_id','id');
    }
}
