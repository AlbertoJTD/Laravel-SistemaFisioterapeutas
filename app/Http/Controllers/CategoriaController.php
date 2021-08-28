<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
    	$categoria = Categoria::paginate();

    	return view('Categorias.index',compact('categoria'));
    	//return "Bienvenido a Categorias";
    }

    public function create(){

    	return view('Categorias.create');
    }

    public function show(Categoria $variable){

        return view('Categorias.show',compact('variable'));
    }

    public function edit(Categoria $variable){

        return view('Categorias.edit', compact('variable'));
    }

    public function update(Request $request, Categoria $variable){

        $request->validate([
            'categoria' => 'required|alpha'
        ]);

        $variable->nombre = $request->categoria;
        $variable->save();
        return view('Categorias.show',compact('variable'));
    }

    public function store(Request $request){

        $request->validate([
            'categoria' => 'required|alpha'
        ]);


    	$categoria = new Categoria();

    	$categoria->nombre = $request->categoria;

    	$categoria->save();

    	return redirect()->route('categoria.show',$categoria);
    }

    public function destroy(Categoria $variable){
        $variable->delete();

        return redirect()->route('categoria.index');
    }
}
