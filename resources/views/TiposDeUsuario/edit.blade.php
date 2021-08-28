
@extends('layouts.plantilla')

@section('Titulo','Modificar categoria')

@section('css')
    .mTop{
            margin-top: 2%;
        }
@endsection

@section('Contenido') 
            <div class="row  justify-content-md-center">
                        <div class="col-md-6 mTop">
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> Actualizar tipo de usuario</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('tipo.update',$variable)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    Usuario
                                                    <input type="text" class="form-control" placeholder="Nombre del tipo de usuario" name="usuario"  value="{{old('usuario',$variable->nombre)}}"
                                                    >
                                                    @error('usuario')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                    </div>
                                                    <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">
                                            Modificar</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection