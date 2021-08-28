@extends('layouts.plantillalogin')

@section('Titulo','Regristro Usuario')

@section('Contenido') 
<div class="container-fluid">
	
		
		<form action="{{route('usuario.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<h1 class="text-center p-5" style="color: ;">Registrate en Dare you</h1>
				
				
				
				<div class="col-lg-4">
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="img/ejercicio.jpg" class="d-block w-100" alt="..."height="368" width="700">
					    </div>
					    <div class="carousel-item">
					      <img src="img/ejercicios2.jpg" class="d-block w-100" alt="..." height="368" width="700">
					    </div>
					    <div class="carousel-item">
					      <img src="img/ejercicios3.jpg" class="d-block w-100" alt="..." height="368" width="700">
					    </div>
					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Next</span>
					  </button>
					</div>

				</div>


				<div class="col-lg-3">
					<div class="form-group">
						<div class="form-group">
                            Nombre
                       		<input type="text" class="form-control" placeholder="Nombre" name="nombre"  value="{{old('nombre')}}">
                            @error('nombre')
                            <div class="alert alert-danger" role="alert">
                                <small>*{{$message}}</small>
                            </div><br>
                            @enderror
                        </div>	
					</div>

					<div class="form-group">
						<div class="form-group">
                            Apellido 1
                       		<input type="text" class="form-control" placeholder="Primer apellido" name="apellido_1"  value="{{old('apellido_1')}}">
                            @error('apellido_1')
                            <div class="alert alert-danger" role="alert">
                                <small>*{{$message}}</small>
                            </div><br>
                            @enderror
                        </div>
					</div>

					<div class="form-group">
						<div class="form-group">
                            Apellido 2
                       		<input type="text" class="form-control" placeholder="Segundo apellido" name="apellido_2"  value="{{old('apellido_2')}}">
                            @error('apellido_2')
                            <div class="alert alert-danger" role="alert">
                                <small>*{{$message}}</small>
                            </div><br>
                            @enderror
                        </div>
					</div>

					<div class="row">
						<div class="form-group col-6">
							<div class="form-group">
	                            Edad
	                       		<input type="number" class="form-control" placeholder="Edad" name="edad"  value="{{old('edad')}}">
	                            @error('edad')
	                            <div class="alert alert-danger" role="alert">
	                                <small>*{{$message}}</small>
	                            </div><br>
	                            @enderror
	                        </div>
						</div>

						<div class="form-group col-6">
							<label style="color: ;">Seleccione genero:</label>
							<select placeholder="Seleccione genero" class="form-control" name="genero" value="" required="" >
								<option value="">Selecciona un genero</option>
								<option value="Femenino">Femenino</option>
								<option value="Masculino">Masculino</option>
							</select>
						</div>
					</div>

					<div class="custom-file">
						<label style="color: ;">Seleccione una foto para su perfil </label><br>
		    			<input style="color: ;" type="file" name ="foto" class="custom-file-input form-control"  aria-describedby="inputGroupFileAddon01" accept="image/*">
		    			@error('foto')
		    				<div class="alert alert-danger" role="alert">
	                            <small>*{{$message}}</small>
	                       </div><br>
		    			@enderror
			  		</div>
				</div>

				<div class="col-lg-3">
					<div class="form-group">
						<div class="form-group">
	                        Correo electronico
	                      	<input type="email" class="form-control" placeholder="Escriba su correo electronico" name="correo"  value="{{old('correo')}}">
	                        @error('correo')
	                        <div class="alert alert-danger" role="alert">
	                            <small>*{{$message}}</small>
	                       </div><br>
	                        @enderror
	                    </div>
					</div>

					<div class="form-group">
						<div class="form-group">
	                        Nickname
	                      	<input type="text" class="form-control" placeholder="Escriba su nombre de usuario" name="nickname"  value="{{old('nickname')}}">
	                        @error('nickname')
	                        <div class="alert alert-danger" role="alert">
	                            <small>*{{$message}}</small>
	                       </div><br>
	                        @enderror
	                    </div>
					</div>

					<div class="form-group">
						<div class="form-group">
	                        Contrase&ntilde;a
	                      	<input type="password" class="form-control" placeholder="Escriba una contrase&ntilde;a" name="password1"  value="{{old('password1')}}">
	                        @error('password1')
	                        <div class="alert alert-danger" role="alert">
	                            <small>*{{$message}}</small>
	                       </div><br>
	                        @enderror
	                    </div>
					</div>

					<div class="form-group">
						<div class="form-group">
	                        Confirmar contrase&ntilde;a
	                      	<input type="password" class="form-control" placeholder="Escriba una contrase&ntilde;a" name="password2"  value="{{old('password2')}}">
	                        @error('password2')
	                        <div class="alert alert-danger" role="alert">
	                            <small>*{{$message}}</small>
	                       </div><br>
	                        @enderror
	                    </div>
					</div>
					<div class="form-group col-12">
							<label style="color: ;">Tipo de usuario</label>
							<select placeholder="Seleccione tipo" class="form-control" name="tipo" value="" required="" >
								<option value="">Selecciona un tipo</option>
								<option value="1">Administrador</option>
								<option value="2">Usuario</option>
							</select>
							@error('tipo')
	                            <div class="alert alert-danger" role="alert">
	                                <small>*{{$message}}</small>
	                            </div><br>
	                            @enderror
					</div>
						<br>
						<div class="text-end">
							<input type="submit" name="" class="btn btn-success"  value="Registrarse">
						</div>
				</div>

				
			</div>
		</form>
	</div>

@endsection