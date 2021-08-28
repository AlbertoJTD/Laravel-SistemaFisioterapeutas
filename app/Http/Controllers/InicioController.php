<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejercicio;

class InicioController extends Controller
{
    public function index(){
    	return view('Inicio.index');
    }
}
