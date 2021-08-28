
@extends('layouts.plantilla')

@section('Titulo','Crear Tipo de Usuario')

@section('css')
    .mTop{
            margin-top: 2%;
        }
@endsection

@section('Contenido') 
            <div class="row row justify-content-md-center">
                        <div class="col-md-6 mTop">
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> Agregar Tipo de usuario</h3>
                                </div>
                                <div class="card-body">
                                    <form  action="{{route('tipo.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group">
                                                    Usuario
                                                    <input type="text" class="form-control" placeholder="Nombre del tipo de usuario" name="usuario"  value="{{old('usuario')}}"
                                                    >
                                                    @error('usuario')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                    </div>
                                                    <br>
                                                    @enderror
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