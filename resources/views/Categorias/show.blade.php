
@extends('layouts.plantilla')

@section('Titulo','Categoria Especifica'.$variable->nombre)


@section('Contenido') 
    <div class="row  justify-content-md-center">
        <div class="col-md-7 mTop"><br>
            <div class="card">
                <div class="card-header">
                    <h3 class="mitexto card-title"> Categoria {{$variable->nombre}}</h3>
                </div>
                <div class="card-body border-secondary">
                    <h6 class="mitexto"><b>Nombre:</b> {{$variable->nombre}}</h6>
                    
                    <a href="{{route('categoria.index')}}" class="btn btn-primary"><i class="fas fa-reply"></i> Volver al inicio</a><br>
                    <a href="{{route('categoria.edit',$variable)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a><br>
                    <form action="{{route('categoria.destroy',$variable)}}" method="post" >
                        @csrf
                        @method('delete')
                        
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Advertencia <i class="fas fa-exclamation-triangle"></i></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Â¿Estas seguro de que quieres eliminar esta categoria?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                  </div>    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection