<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fisioterapeuta;
use App\Models\Especialidad;
use App\Models\FisioterapeutaEspecialidad;
use Illuminate\Support\Facades\Storage;

class FisioterapeutaController extends Controller
{
    public function index(){
    	$fisioterapeuta = Fisioterapeuta::paginate();

    	return view('Fisioterepeutas.index',compact('fisioterapeuta'));
    }

    public function create(){

    	return view('Fisioterepeutas.create');
    }

    public function cargar(Fisioterapeuta $variable){

        $especialidad = Especialidad::paginate();


        return view('Fisioterepeutas.cargar', compact('especialidad'), compact('variable'));
    }

    public function show(Fisioterapeuta $variable){

        $mezcla = FisioterapeutaEspecialidad::where('fisioterapeuta_id','=',$variable->id)->get();
        $especialidades = Especialidad::all();

        return view('Fisioterepeutas.show',compact('variable','mezcla','especialidades'));
    }

    public function edit(Fisioterapeuta $variable){

        return view('Fisioterepeutas.edit', compact('variable'));
    }

    public function update(Request $request, Fisioterapeuta $variable){

        $request->validate([
            'nombre' => 'required|alpha',
            'apellido_1' => 'required|alpha',
            'apellido_2' => 'required|alpha',            
            'cedula' => 'required|alpha_dash',
            'edad' => 'required|digits:2',
            'telefono' => 'required|digits:10',
            'foto' => 'image',
            'nickname' => 'required|alpha_dash',
            'password1' => 'required|alpha_dash|min:8',
            'password2' => 'required|alpha_dash|min:8',
            'correo' => 'required|email'
            
        ]);

        $variable->nombre = $request->nombre;
        $variable->ap1 = $request->apellido_1;
        $variable->ap2 = $request->apellido_2;
        $variable->cedula = $request->cedula;
        $variable->edad = $request->edad;
        $variable->telefono = $request->telefono;

        if($request->hasFile('foto')){
            $variable->foto = $request->file('foto')->store('uploads','public');
            $url=Storage::url($variable->foto);

            $variable->foto = $url;
            //return $request->file('foto')->store('public/uploads');
            //return $usuario->foto;
        }

        $variable->nickname = $request->nickname;
        $variable->correo = $request->correo;

        $contra1 = $request->password1;
        $contra2 = $request->password2;
        if($contra1 == $contra2){
            $variable->password = hash('md5', $contra1);
            $variable->save();
            return redirect()->route('fisioterapeuta.show',$variable->id);
        }else{
            return redirect()->route('fisioterapeuta.edit',$variable->id);
        }
    }

    public function destroy(Fisioterapeuta $variable){
        $variable->delete();

        return redirect()->route('fisioterapeuta.index');
    }

    public function store(Request $request){

        /*$fisioterapeuta = new Fisioterapeuta();
        $fisioterapeuta = request()->all();

        return response()->json($fisioterapeuta);*/
        

        
        $request->validate([
            'nombre' => 'required|alpha',
            'ap1' => 'required|alpha',
            'ap2' => 'required|alpha',
            'cedula' => 'required|alpha_dash',
            'edad' => 'required|digits:2',
            'nickname' => 'required|alpha_dash',
            'foto' => 'image',
            'pas1' => 'required|alpha_dash|min:8',
            'pas2' => 'required|alpha_dash|min:8',
            'correo' => 'required|email',
            'telefono' => 'required|digits:10'
        ]);



    	$fisioterapeuta = new Fisioterapeuta();
    	$fisioterapeuta->nombre = $request->nombre;
    	$fisioterapeuta->ap1 = $request->ap1;
        $fisioterapeuta->ap2 = $request->ap2;
        $fisioterapeuta->cedula = $request->cedula;
        $fisioterapeuta->edad = $request->edad;
        $fisioterapeuta->nickname = $request->nickname;
       

        $fisioterapeuta->password = hash('md5', $request->pas1);


        $fisioterapeuta->telefono = $request->telefono;
        $fisioterapeuta->correo = $request->correo;

        if($request->hasFile('foto')){
            
            $fisioterapeuta->foto = $request->file('foto')->store('uploads','public');
            $url=Storage::url($fisioterapeuta->foto);

            $fisioterapeuta->foto = $url;
        }else{
            $fisioterapeuta->foto = "/storage/uploads/bata.png";
        }

        $fisioterapeuta->save();

    	return redirect()->route('fisioterapeuta.show',$fisioterapeuta);
    }


    public function store2(Request $request, Fisioterapeuta $variable){
  
        $fisioterapeuta = Fisioterapeuta::find($variable->id);
        $fisioterapeuta->especia()->attach($request->especialidad);
        return redirect()->route('fisioterapeuta.show',$variable->id);
    }
}
