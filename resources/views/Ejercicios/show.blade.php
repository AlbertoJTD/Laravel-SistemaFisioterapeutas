
@extends('layouts.plantilla')

@section('Titulo','Ejercicio especifico'.$variable->nombre)


@section('Contenido') 
    <div class="row  justify-content-md-center">
        <div class="col-md-7 mTop"><br>
            <div class="card">
                <div class="card-header">
                    <h3 class="mitexto card-title"> Ejercicio {{$variable->nombre}}</h3>
                </div>
                
                <div class="card-body border-secondary">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <?php 
                            $contador = 0;
                            $valor = 'active';
                         ?>
                        @foreach ($mezcla as $combinacion)
                            @foreach ($foto as $ima)
                                @if($combinacion->imagen_id == $ima->id)
                                    @if($contador == 0)
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset($ima->nombre)}}" width="250" height="400"  alt="">
                                        </div>
                                    @else
                                        <div class="carousel-item ">
                                            <img class="d-block w-100" src="{{asset($ima->nombre)}}" width="250" height="400"  alt="">
                                        </div>
                                    @endif
                                    <?php 
                                        $contador++;
                                     ?>
                                @endif
                            @endforeach
                        @endforeach
                        
                      </div>

                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                      </button>
                    </div>
                <h6 class="mitexto"><b>Nombre:</b> {{$variable->nombre}}</h6>
                <h6 class="mitexto"><b>Descripcion:</b> {{$variable->descripcion}}</h6>
                <a href="{{route('ejercicio.index')}}" class="btn btn-primary"><i class="fas fa-reply"></i> Volver al inicio</a>
                    <a href="{{route('ejercicio.edit',$variable)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
                    <a href="{{route('ejercicio.cargar',$variable)}}" class="btn btn-success"><i class="fas fa-upload"></i> Cargar imagenes</a>
                    <form action="{{route('ejercicio.destroy',$variable)}}" method="post" >
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
                                        <p>¿Estas seguro de que quieres eliminar este ejercicio?</p>
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