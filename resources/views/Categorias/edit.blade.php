
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
                                    <h3 class="card-title"> Actualizar Categoria</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('categoria.update',$variable)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="mitexto form-group">
                                                    Categoria
                                                    <input type="text" class="mitexto form-control" placeholder="Nombre de la categoria" name="categoria"  value="{{old('categoria',$variable->nombre)}}"
                                                    >
                                                    @error('categoria')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                    </div>
                                                    <br>
                                                    @enderror
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