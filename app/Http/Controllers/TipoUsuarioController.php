<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoUsuario;

class TipoUsuarioController extends Controller
{
    public function index(){
    	$tipo = Tipousuario::paginate();

    	return view('TiposDeUsuario.index',compact('tipo'));
    	//return "Bienvenido a tipos";
    }

    public function create(){

    	return view('TiposDeUsuario.create');
    }

    public function show(Tipousuario $variable){

        return view('TiposDeUsuario.show',compact('variable'));
    }

    public function edit(Tipousuario $variable){

        return view('TiposDeUsuario.edit', compact('variable'));
    }

    public function update(Request $request, Tipousuario $variable){

        $request->validate([
            'usuario' => 'required|alpha'
        ]);

        $variable->nombre = $request->nombre;
        $variable->save();
        return view('TiposDeUsuario.show',compact('variable'));
    }

    public function destroy(Tipousuario $variable){
        $variable->delete();

        return redirect()->route('tipo.index');
    }

    public function store(Request $request){

        $request->validate([
            'usuario' => 'required|alpha'
        ]);


    	$tipo = new Tipousuario();

    	$tipo->nombre = $request->usuario;

    	$tipo->save();

    	return redirect()->route('tipo.index');
    }

}
