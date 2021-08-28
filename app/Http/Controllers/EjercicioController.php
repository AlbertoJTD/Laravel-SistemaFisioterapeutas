<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejercicio;
use App\Models\Imagen;
use App\Models\Categoria;
use App\Models\EjercicioImagen;
use Illuminate\Support\Facades\Storage;


class EjercicioController extends Controller
{
    public function index(){
    	$ejercicio = Ejercicio::paginate();
        
    	return view('Ejercicios.index',compact('ejercicio'));
    }

    public function create(){
        $categoria = Categoria::paginate();

    	return view('Ejercicios.create',compact('categoria'));
    }

    public function show(Ejercicio $variable){

        $mezcla= EjercicioImagen::where('ejercicio_id','=',$variable->id)->get();
        $foto = Imagen::all();

        //return response()->json($mezcla);


        return view('Ejercicios.show',compact('variable','mezcla','foto'));
    }

    public function edit(Ejercicio $variable){

        return view('Ejercicios.edit', compact('variable'));
    }

    public function cargar(Ejercicio $variable){

        return view('Ejercicios.cargar', compact('variable'));
    }

    public function update(Request $request, Ejercicio $variable){
        $variable->nombre = $request->nombre;
        $variable->descripcion = $request->descripcion;
        $variable->save();
        return view('Ejercicios.show',compact('variable'));
    }

    public function destroy(Ejercicio $variable){
        $variable->delete();

        return redirect()->route('ejercicio.index');
    }

    public function store(Request $request){
    	$ejercicio = new Ejercicio();

    	$ejercicio->nombre = $request->nombre;
    	$ejercicio->descripcion = $request->descripcion;
        $ejercicio->categoria_id = $request->categoria;

    	$ejercicio->save();

    	return redirect()->route('ejercicio.show',$ejercicio);
    }

    public function store2(Request $request, Ejercicio $variable){
        //return $variable->id;
        //$ejercicio2 = new Ejercicio();
        $imagen = new Imagen();
        //$imageID = Imagen::max('id');


        $imagen->nombre = $request->nombre;

        if($request->hasFile('foto')){
            
            $imagen->nombre = $request->file('foto')->store('uploads','public');
            $url=Storage::url($imagen->nombre);

            $imagen->nombre = $url;
            $imagen->save();
            $imagen = Imagen::max('id');
            
            $ejercicio2 = Ejercicio::find($variable->id);
            $ejercicio2->img()->attach($imagen);   
        }
        return redirect()->route('ejercicio.show',$variable->id);
    }


    public function coordinacion(){
        $categoria = Categoria::Select('id')->where('nombre','=','coordinacion')->get();

        foreach ($categoria as $catego) {
            $id = $catego->id;
        }

        $ejercicio = Ejercicio::Where('categoria_id',$id)->get();        
        return view('Ejercicios.coordinacion',compact('ejercicio'));
    }

    public function movilidad(){
        $categoria = Categoria::Select('id')->where('nombre','=','movilidad')->get();

        foreach ($categoria as $catego) {
            $id = $catego->id;
        }

        $ejercicio = Ejercicio::Where('categoria_id',$id)->get();        
        return view('Ejercicios.movilidad',compact('ejercicio'));
    }

    public function precision(){
        $categoria = Categoria::Select('id')->where('nombre','=','precision')->get();

        foreach ($categoria as $catego) {
            $id = $catego->id;
        }

        $ejercicio = Ejercicio::Where('categoria_id',$id)->get();        
        return view('Ejercicios.precision',compact('ejercicio'));
    }


}
