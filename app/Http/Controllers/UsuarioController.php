<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;


class UsuarioController extends Controller
{
    public function index(){
    	return view('Usuarios.index');
    }

    public function show(Usuario $variable){

        return view('Usuarios.show',compact('variable'));
    }

    public function edit(Usuario $variable){

        return view('Usuarios.edit', compact('variable'));
    }

    public function destroy(Usuario $variable){
        $variable->delete();

        return redirect()->route('usuario.index');
    }

    public function update(Request $request, Usuario $variable){

        $request->validate([
            'nombre' => 'required|alpha',
            'apellido_1' => 'required|alpha',
            'apellido_2' => 'required|alpha',
            'edad' => 'required|digits:2',
            'correo' => 'required',
            'tipo' => 'required|integer',
            'foto' => 'image',
            'nickname' => 'required|alpha_dash',
            'password1' => 'required|alpha_dash|min:8',
            'password2' => 'required|alpha_dash|min:8'
        ]);


        $variable->nombre = $request->nombre;
        $variable->ap1 = $request->apellido_1;
        $variable->ap2 = $request->apellido_2;
        $variable->edad = $request->edad;
        

        if($request->hasFile('foto')){
            $variable->foto = $request->file('foto')->store('uploads','public');
            $url=Storage::url($variable->foto);

            $variable->foto = $url;
            //return $request->file('foto')->store('public/uploads');
            //return $usuario->foto;
        }



        $variable->nickname = $request->nickname;
        $variable->correo = $request->correo;
        $variable->genero = $request->genero;
        $variable->tipousuario_id = $request->tipo;
        
        $contra1 = $request->password1;
        $contra2 = $request->password2;
        if($contra1 == $contra2){
            $variable->contra = hash('md5', $contra1);
            $variable->save();
            return redirect()->route('usuario.show',$variable->id);
        }else{
            return redirect()->route('usuario.edit',$variable->id);
        }
        //Validar contraseñas
    }
}
