
@extends('layouts.plantilla')

@section('Titulo','Modificar ejercicio')

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
                                    <h3 class="mitexto card-title"> Actualizar ejercicio</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('ejercicio.update',$variable)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label class="mitexto">Nombre</label>
                                                    <input type="text" class="mitexto form-control" placeholder="nombre"  value="{{$variable->nombre}}" required name="nombre" 
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label class="mitexto">Descripcion</label>
                                                    <input type="text" class="mitexto form-control" placeholder="descripcion"  value="{{$variable->descripcion}}" required name="descripcion" 
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="mitexto btn btn-info btn-fill pull-right">
                                            Actualizar</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection