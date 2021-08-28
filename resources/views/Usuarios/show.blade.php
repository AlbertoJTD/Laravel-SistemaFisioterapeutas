
@extends('layouts.plantilla')

@section('Titulo','Usuario especifico'.$variable->nombre)


@section('Contenido') 

<div class="row  justify-content-md-center">
    <div class="col-md-10 mTop"><br>

        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Perfil de usuario</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                        <div class="col-md-4 pr-1">
                          <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$variable->nombre}}" readonly=" ">
                          </div>
                        </div>
                        <div class="col-md-4 pr-1">
                          <div class="form-group">
                            <label>Apellido 1</label>
                            <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$variable->ap1}}" readonly=" ">
                          </div>
                        </div>
                        <div class="col-md-4 pr-1">
                          <div class="form-group">
                            <label>Apellido 2</label>
                            <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$variable->ap2}}" readonly=" ">
                          </div>
                        </div>
                        <div class="col-md-4 pr-1">
                          <div class="form-group">
                            <label>Edad</label>
                            <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$variable->edad}}" readonly=" ">
                          </div>
                        </div>
                        <div class="col-md-4 pr-1">
                          <div class="form-group">
                            <label>Correo</label>
                            <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$variable->correo}}" readonly=" ">
                          </div>
                        </div>
                         <div class="col-md-4 pr-1">
                          <div class="form-group">
                            <label>Genero</label>
                            <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$variable->genero}}" readonly=" ">
                          </div>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              
              <div class="card-body">
                <div class="author">
                 
                    <img src="{{asset($variable->foto)}}" width="300" height="250" alt="">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Nickname</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$variable->nickname}}" readonly=" ">
                      </div>
                    </div><br>
                    <a href="{{route('usuario.index')}}" class="btn btn-outline-primary"><i class="fas fa-reply"></i> Volver al inicio</a>
             
                    <a href="{{route('usuario.edit',$variable)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i> Editar</a>
                    
                    <form action="{{route('usuario.destroy',$variable)}}" method="post" >
                        @csrf
                        @method('delete')
                        
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                        <p>¿Estas seguro de que quieres eliminar este usuario?</p>
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
        </div>

        </div>
    </div>
@endsection