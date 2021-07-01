<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','update_at'];
    public function profesors()
    {
        return $this->belongsToMany(Profesor::class,'profesor_aula_clase')->withPivot('clase_id');
    }

    public function clases()
    {
        return $this->belongsToMany(Clase::class,'profesor_aula_clase')->withPivot('profesor_id');
    }
}
