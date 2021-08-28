
@extends('layouts.plantilla')

@section('Titulo','Crear categoria')


@section('css')
    .mTop{
            margin-top: 2%;
        }
@endsection

@section('Contenido') 

            <div class="row  justify-content-md-center">
                        <div class="col-md-5 mTop">
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> Agregar Categoria</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('categoria.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    Categoria
                                                    <input type="text" class="form-control" placeholder="Nombre de la categoria" name="categoria"  value="{{old('categoria')}}"
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
                                        <button type="submit" class="btn btn-info btn-fill pull-right">
                                            categoria</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection