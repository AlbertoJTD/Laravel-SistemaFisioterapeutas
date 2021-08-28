<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $table = "especialidad";

    public function fisiotera(){
        return $this->belongsToMany('App\Models\Fisioterapeuta');
    }
}
