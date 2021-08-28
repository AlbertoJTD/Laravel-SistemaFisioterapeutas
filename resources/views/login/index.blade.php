
@extends('layouts.plantillalogin')

@section('Titulo','Iniciar Sesión')

@section('Color','#C7DAEB')

@section('Contenido') 
	<div class="container-fluid">
	
		@if(Session::has('mensaje'))
		    <div class="alert alert-success alert-dismissible fade show" role="alert">
		      {{Session::get('mensaje')}}
		      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		    </div>
		@endif

		@if(Session::has('mensaje3'))
		    <div class="alert alert-danger alert-dismissible fade show" role="alert">
		      {{Session::get('mensaje3')}}
		      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		    </div>
		@endif



		<h1 class="text-center p-5" style="color: ;">Dare you</h1>
		<img src="{{asset('img/user-1.png') }}" alt="" width="100" height="100" class="rounded mx-auto d-block p-1">
	
		<div class="row justify-content-center">
			<div class="col-12 col-sm-6 col-md-3">
				<form action="{{route('usuario.validar')}}" method="POST">
					@csrf
					<div class="form-group mb-2">
						<label style="color: ;" >Alias</label>
						<input type="text" name="alias" class="form-control" placeholder="Introduzca su alias" required>
					</div>
					<div class="form-group ">
						<label style="color: ;">Contrase&ntilde;a</label>
					<input type="password" name="contra" class="form-control mb-2" placeholder="Introduzca su contrase&ntilde;a" required>
					</div>

					<div class="text-end">
						<a href="#" class="text-end" style="color: ;">¿Olvidaste la contrase&ntilde;a?</a>
					</div>
					<br>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"  type="button">Iniciar sesion</button>
					</div>
				</form>
				<a href="{{route('registro')}}" title="" style="color: ;">Registrarse</a>
			</div>
			
		</div>
	</div>
@endsection
