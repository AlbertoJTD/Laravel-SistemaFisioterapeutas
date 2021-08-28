<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $table = "ejercicio";

    //Relacion con categorias
    public function categorias(){
        return $this->hasMany('App\Models\Categoria');
    }

      public function usua(){
        return $this->belongsToMany('App\Models\Usuario');
    }

    public function img(){
        return $this->belongsToMany('App\Models\Imagen');
    }
}
