
@extends('layouts.plantilla')

@section('Titulo','Crear categoria')

@section('css')
    .mTop{
            margin-top: 2%;
        }
@endsection

@section('Contenido') 

<!-- End Navbar -->
            <div class="row  justify-content-md-center">
                        <div class="col-md-6 mTop">
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"> Agregar especialidad</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('especialidad.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    Especialidad
                                                    <input type="text" class="form-control" placeholder="Nombre de la especialidad" name="especialidad"  value="{{old('especialidad')}}"
                                                    >
                                                    @error('especialidad')
                                                    <div class="alert alert-danger" role="alert">
                                                        <small>*{{$message}}</small>
                                                    </div>
                                                    <br>
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