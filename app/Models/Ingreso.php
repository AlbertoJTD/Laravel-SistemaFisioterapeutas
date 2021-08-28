<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $table = "ingreso";

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
