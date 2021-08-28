
@extends('layouts.plantilla')

@section('Titulo','Crear ejercicio')

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
                                    <h3 class="card-title"> Agregar ejercicio</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('ejercicio.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" placeholder="Nombre" required name="nombre" 
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripcion</label>
                                                    <input type="text" class="form-control" placeholder="descripcion" required name="descripcion" 
                                                    >
                                                </div>

                                               <label style="color: ;">Seleccione categoria:</label>                                   
                                                <select placeholder="Seleccione categoria" class="form-control" name="categoria" value="" required="" >
                                                    <option value="">Selecciona una categoria</option>
                                                    @foreach ($categoria as $catego)
                                                    <option value="{{$catego->id}}">{{$catego->nombre}}</option>
                                                     @endforeach
                                                </select>
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