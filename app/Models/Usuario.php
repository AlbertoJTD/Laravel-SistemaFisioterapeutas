<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuario";

    public function ejerci(){
        return $this->belongsToMany('App\Models\Ejercicio');
    }

    public function tipoUsurio(){
        return $this->belongsTo('App\Models\TipoUsuario');
    }

    public function fisioterapeuta(){
        return $this->belongsTo('App\Models\Fisioterapeuta');
    }

    public function ingresos(){
    	return $this->hasMany('App\Models\Ingreso');
    }
}
