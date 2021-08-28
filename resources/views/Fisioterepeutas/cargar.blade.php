
@extends('layouts.plantilla')

@section('Titulo','Cargar especialidades')

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
                                    <h3 class="card-title"> Agregar especialidad</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('fisioterapeuta.store2',$variable)}}" method="post">
                                        @csrf
                                        <div class="row">
                                            
                                            

                                            <label style="color: ;">Seleccione especialidad:</label>                                   
                                                <select placeholder="Seleccione especialidad" class="form-control" name="especialidad" value="" required="" >
                                                    <option value="">Selecciona una especialidad</option>
                                                    @foreach ($especialidad as $espe)
                                                    <option value="{{$espe->id}}">{{$espe->especialidad}}</option>
                                                     @endforeach
                                                </select>

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