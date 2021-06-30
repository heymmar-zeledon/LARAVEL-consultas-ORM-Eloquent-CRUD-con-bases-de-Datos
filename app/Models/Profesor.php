<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','update_at'];
    //relacion de muchos a muchos
    public function clases()
    {
        return $this->belongsToMany(Clase::class,'profesor_aula_clase')->withPivot('id_aula');
    }

    public function aulas()
    {
        return $this->belongsToMany(Aula::class,'profesor_aula_clase')->withPivot('id_clase');
    }
}
