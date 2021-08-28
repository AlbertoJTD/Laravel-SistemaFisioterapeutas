<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;

class EspecialidadController extends Controller
{
    public function index(){
    	$especialidad = Especialidad::paginate();

    	return view('Especialidades.index',compact('especialidad'));
    	//return "Bienvenido a Categorias";
    }

    public function create(){

    	return view('Especialidades.create');
    }

    public function show(Especialidad $variable){

        return view('Especialidades.show',compact('variable'));
    }
   
    public function edit(Especialidad $variable){

        return view('Especialidades.edit', compact('variable'));
    }

    public function update(Request $request, Especialidad $variable){

        $request->validate([
            'especialidad' => 'required|alpha'
        ]);


        $variable->especialidad = $request->nombre;
        $variable->save();
        return view('Especialidades.show',compact('variable'));
    }

    public function destroy(Especialidad $variable){
        $variable->delete();

        return redirect()->route('especialidad.index');
    }

    public function store(Request $request){


        $request->validate([
            'especialidad' => 'required|alpha'
        ]);


    	$especialidad = new Especialidad();

    	$especialidad->especialidad = $request->especialidad;

    	$especialidad->save();

    	return redirect()->route('especialidad.index');
    }

}
