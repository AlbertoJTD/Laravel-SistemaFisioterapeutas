@extends('layouts.plantilla')

@section('Titulo','Inicio')

@section('Contenido') 
	<div class="form-group">
        <div class="row ">
            <div class="col-md-12">
                <div class=" " style="border:none;">
                    <h2 class="p-3" align="center" id="titulo1" style="font-family: Verdana;">
                    <i class="mitexto">¿Qu&eacute; quieres entrenar hoy?</i></h2>
                </div>                            
            </div>
        </div>
    </div>

    <br>
        <div class="row justify-content-center">
          	<div class="col-lg-3 col-sm-12 col-md-6" style="display: inline-block;">
	          	<div class="card border-secondary" style="width: 18rem;">
					<img src="{{ asset('img/movimiento.jpeg') }}" with="200" height="200" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Movilidad</h5>
					    <p class="mitexto card-text">En esta sección encontraras ejercicios para mejorar tu movilidad</p>
					    <a href="{{route('ejercicio.movilidad')}}" class="btn btn-primary">Ver ejercicios</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-12 col-md-6" style="display: inline-block;">
	            <div class="card border-secondary" style="width: 18rem;" >
					<img src="{{ asset('img/punteria.jpg') }}" with="200" height="200" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Precisi&oacute;n</h5>
					    <p class="mitexto card-text">En esta sección encontraras ejercicios para mejorar tu precisión</p>
					    <a href="{{route('ejercicio.precision')}}" class="btn btn-primary">Ver ejercicios</a>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-12 col-md-6" style="display: inline-block;">
	            <div class="card border-secondary" style="width: 18rem;" >
					<img src="{{ asset('img/coordinacion.jpg') }}" with="200" height="200" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Coordinaci&oacute;n</h5>
					   	<p class="mitexto card-text">En esta sección encontraras ejercicios para mejorar tu coordinación</p>
					    <a href="{{route('ejercicio.coordinacion')}}" class="btn btn-primary">Ver ejercicios</a>
					</div>
				</div>
			</div>
        </div>
</div>
@endsection


