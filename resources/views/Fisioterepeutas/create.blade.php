@extends('layouts.plantilla')

@section('Titulo','Crear fisioterapeuta')


@section('css')
    .mTop{
            margin-top: 1%;
        }
@endsection

@section('Contenido') 

            <div class="row  justify-content-md-center">
                        <div class="col-md-6 mTop">
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> Agregar fisioterapeuta</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('fisioterapeuta.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Fisioterapeuta</label>
                                                    <input type="text" class="form-control" placeholder="Nombre"  name="nombre" value="{{old('nombre')}}"
                                                    >
                                                    @error('nombre')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido1</label>
                                                    <input type="text" class="form-control" placeholder="Primer apellido"  name="ap1" value="{{old('ap1')}}"
                                                    >
                                                    @error('ap1')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido2</label>
                                                    <input type="text" class="form-control" placeholder="Primer apellido"  name="ap2" value="{{old('ap2')}}"
                                                    >
                                                    @error('ap2')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Cedula</label>
                                                    <input type="text" class="form-control" placeholder="Cedula"  name="cedula" value="{{old('cedula')}}" 
                                                    >
                                                    @error('cedula')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Nickname</label>
                                                    <input type="text" class="form-control" placeholder="Nickname"  name="nickname" value="{{old('nickname')}}"
                                                    >
                                                    @error('nickname')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <input type="text" class="form-control" placeholder="Correo"  name="correo" value="{{old('correo')}}"
                                                    >
                                                    @error('correo')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Pas1</label>
                                                    <input type="password" class="form-control" placeholder="Pas1"  name="pas1" value="{{old('pas1')}}"
                                                    >
                                                    @error('pas1')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Pas2</label>
                                                    <input type="password" class="form-control" placeholder="Pas2"  name="pas2" value="{{old('pas2')}}"
                                                    >
                                                    @error('pas2')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Edad</label>
                                                    <input type="number" class="form-control" placeholder="Edad"  name="edad" value="{{old('edad')}}"
                                                    >
                                                    @error('edad')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                                <div class="custom-file">
                                                    <label style="color: ;">Seleccione una foto para su perfil </label><br>
                                                    <input style="color: ;" type="file" name ="foto" class="custom-file-input form-control"  aria-describedby="inputGroupFileAddon01" accept="image/*">
                                                    @error('foto')
                                                        <div class="alert alert-danger" role="alert">
                                                            <small>*{{$message}}</small>
                                                       </div><br>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="number" class="form-control" placeholder="Telefono"  name="telefono" value="{{old('telefono')}}"
                                                    >
                                                    @error('telefono')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                        </div><br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">
                                            Crear</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection