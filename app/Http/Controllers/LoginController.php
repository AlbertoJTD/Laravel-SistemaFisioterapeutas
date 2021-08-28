<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;


class LoginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function tabla(){
        $tabla = Usuario::paginate();

        return view('Usuarios.index',compact('tabla'));
    }

    public function registro(){
    	return view('login.registro');
    }
     
    public function validar(Request $request){
        
        $usuario = new Usuario();
        $usuario->nickname = $request->alias;


        $usuario->contra = hash('md5', $request->contra);
        $usuario = Usuario::where('nickname','=',$usuario->nickname)->where('contra','=',$usuario->contra)->get();



        //return response()->json($usuario);

        if ($usuario->isEmpty()) {
            return redirect()->route('raiz')->with('mensaje3','El usuario o contraseña son incorrectos');
            //return " Esta vacio";
        }else{
            /*session_start();
            $_SESSION['id']=$usuario['id'];
            $_SESSION['nombre']=$usuario['nombre'];
            $_SESSION['tipoUsuario']=$usuario['tipousuario_id'];*/
            return redirect()->route('inicio.index');
            //return "No esta vacio";
           
        }
        // $user = $usuario;   
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|alpha',
            'apellido_1' => 'required|alpha',
            'apellido_2' => 'required|alpha',
            'edad' => 'required|digits:2',
            'correo' => 'required',
            'foto' => 'image',
            'nickname' => 'required|alpha_dash',
            'password1' => 'required|alpha_dash|min:8',
            'password2' => 'required|alpha_dash|min:8'
        ]);



        $usuario = new Usuario();

        $valor = 0;

        $usuario->nombre = $request->nombre;
        $usuario->ap1 = $request->apellido_1;
        $usuario->ap2 = $request->apellido_2;
        $usuario->edad = $request->edad;

        if($request->hasFile('foto')){
            //$url=$request->file('foto')->store('uploads','public');

            $usuario->foto = $request->file('foto')->store('uploads','public');
            $url=Storage::url($usuario->foto);

            $usuario->foto = $url;
            //return $request->file('foto')->store('public/uploads');
            //return $usuario->foto;
        }else{
            $usuario->foto = "/storage/uploads/user.png";
        }

        $usuario->nickname = $request->nickname;
        $usuario->correo = $request->correo;
        $usuario->genero = $request->genero;
        $usuario->tipousuario_id = $request->tipo;

        $contra1 = $request->password1;
        $contra2 = $request->password2;
        if($contra1 == $contra2){
            $usuario->contra = hash('md5', $contra1);



            $usuario->save();
            return redirect()->route('raiz')->with('mensaje','Se ha realizado el registro con exito');
        }else{
            return redirect()->route('registro')->with('mensaje2','Las contraseñas no coinciden');
            
        }
        //Validar contraseñas
    }
}
