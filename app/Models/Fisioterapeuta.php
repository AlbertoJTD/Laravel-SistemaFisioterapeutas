<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fisioterapeuta extends Model
{
    use HasFactory;

    protected $table = "fisioterapeuta";

    public function especia(){
        return $this->belongsToMany('App\Models\Especialidad');
    }

    public function usuarios(){
    	return $this->hasMany('App\Models\Usuario');
    }
}
