
@extends('layouts.plantilla')

@section('Titulo','Modificar fisioterapeuta')

@section('css')
    .mTop{
            margin-top: 1%;
        }
@endsection

@section('Contenido') 
  
    <div class="row  justify-content-md-center">
        <div class="col-md-8 mTop"><br>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Actualizar perfil de fisioterapeuta</h5>
                        </div>
                        <div class="card-body">
                        <form action="{{route('fisioterapeuta.update',$variable)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="Escriba su nombre" name="nombre" value="{{old('nombre',$variable->nombre)}}"> 
                                        @error('nombre')
                                            <div class="alert alert-danger" role="alert">
                                                <small>*{{$message}}</small>
                                            </div><br>
                                       @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Apellido 1</label>
                                        <input type="text" class="form-control" placeholder="Escriba su primer apellido" name="apellido_1" value="{{old('apellido_1',$variable->ap1)}}">
                                            @error('apellido_1')
                                                <div class="alert alert-danger" role="alert">
                                                    <small>*{{$message}}</small>
                                                </div><br>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Apellido 2</label>
                                        <input type="text" class="form-control" placeholder="Escriba su primer apellido" name="apellido_2" value="{{old('apellido_2',$variable->ap2)}}">
                                            @error('apellido_2')
                                                <div class="alert alert-danger" role="alert">
                                                    <small>*{{$message}}</small>
                                                </div><br>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Cedula</label>
                                        <input type="text" class="form-control" placeholder="Escriba su segundo apellido" name="cedula" value="{{old('cedula',$variable->cedula)}}">
                                        @error('cedula')
                                            <div class="alert alert-danger" role="alert">
                                                <small>*{{$message}}</small>
                                            </div><br>
                                        @enderror
                                  </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                        <label>Edad</label>
                                        <input type="integer" class="form-control" placeholder="edad" name="edad" value="{{old('edad',$variable->edad)}}">
                                        @error('edad')
                                            <div class="alert alert-danger" role="alert">
                                                <small>*{{$message}}</small>
                                            </div><br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control" placeholder="Escriba su segundo apellido" name="telefono" value="{{old('telefono',$variable->telefono)}}">
                                        @error('telefono')
                                            <div class="alert alert-danger" role="alert">
                                                <small>*{{$message}}</small>
                                            </div><br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                        <label>Correo</label>
                                        <input type="text" class="form-control" placeholder="Escriba su correo electronico" name="correo" value="{{old('correo',$variable->correo)}}">
                                        @error('correo')
                                            <div class="alert alert-danger" role="alert">
                                                <small>*{{$message}}</small>
                                            </div><br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                        <label>Nickname</label>
                                        <input type="text" class="form-control" placeholder="Escriba un nombre de usuario" name="nickname" value="{{old('nickname',$variable->nickname)}}">
                                        @error('nickname')
                                            <div class="alert alert-danger" role="alert">
                                                <small>*{{$message}}</small>
                                            </div><br>
                                        @enderror
                                    </div><br>
                                </div>
                                <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                        <label >Seleccione una nueva foto para su perfil </label><br>
                                        <input  type="file" name ="foto" class="custom-file-input form-control"  aria-describedby="inputGroupFileAddon01">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                        <label>Nueva contrase&ntilde;a</label>
                                        <input type="password" class="form-control" placeholder="Opcional" name="password1" value="">
                                        @error('password1')
                                            <div class="alert alert-danger" role="alert">
                                                <small>*{{$message}}</small>
                                            </div><br>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                        <label>Confirmar contrase&ntilde;a</label>
                                        <input type="password" class="form-control" placeholder="Confirme su contrase&ntilde;a" name="password2" value="">
                                        @error('password2')
                                            <div class="alert alert-danger" role="alert">
                                                <small>*{{$message}}</small>
                                            </div><br>
                                        @enderror
                                    </div><br>
                                </div>
                            </div>
                             <div class="text-end">
                                    <input type="submit" name="" class="btn btn-success"  value="Actualizar">
                            </div>
                                <input type="hidden" name="tipo" value="{{$variable->tipousuario_id}}">
                        </form>
                        <a href="{{route('fisioterapeuta.show',$variable)}}" class="btn btn-outline-primary">Volver</a>

                    </div>
                </div>
          </div>
        </div>
    </div>

@endsection