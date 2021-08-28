
@extends('layouts.plantilla')

@section('Titulo','Cargar imagenes')

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
                                    <h3 class="card-title"> Agregar imagenes</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('ejercicio.store2',$variable)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            
                                            <div class="custom-file">
                                                    <label style="color: ;">Seleccione una foto para el ejercicio </label><br>
                                                    <input required style="color: ;" type="file" name ="foto" class="custom-file-input form-control"  aria-describedby="inputGroupFileAddon01" accept="image/*">
                                                    @error('foto')
                                                        <div class="alert alert-danger" role="alert">
                                                            <small>*{{$message}}</small>
                                                       </div><br>
                                                    @enderror
                                                </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">
                                            Cargar</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection