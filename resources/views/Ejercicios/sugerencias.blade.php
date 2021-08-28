
@extends('layouts.plantilla')

@section('Titulo','Ejercicios fisioterapeuta')

@section('Contenido') 
	<div class="container-fluid">
			<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Dare you</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="inicio.html">Inicio</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Ejercicios</a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="suscripcion.html">Suscripcion</a>
		        </li>
		        <li class="nav-item">
		          		<a class="nav-link" href="suscripcion.html">Perfil</a>
		        </li>
		        <!--
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Dropdown
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="#">Action</a></li>
		            <li><a class="dropdown-item" href="#">Another action</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#">Something else here</a></li>
		          </ul>
		        </li>

		        
		        <li class="nav-item">
		          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		        </li>-->
		      </ul>
		      <form class="d-flex">
		        <input class="form-control me-2" type="search" placeholder="Buscar ejercicios" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit"><img src="{{asset('img/lupa.png')}}" alt="" width="25" height="25"></button>
		      </form>
		    </div>
		  </div>
		</nav>
		<div class="form-group">
            <div class="row ">
                <div class="col-md-12">
                    <div class=" " style="border:none;">
                        <h2 class="p-4" align="left" id="titulo1" style="font-family: Verdana;">
                        <i>Ejercicios sugeridos por el fisioterapeuta</i></h2>
                    </div>                            
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class=" " style="background: #B7EA72;">
                        <h5 class="p-4" align="center" id="titulo1" style="font-family: Verdana;">
                        Ejercicios Movilidad</h5>
                    </div>                            
                </div>
                <div class="col-md-3">
                    <div class=" " style="background:  #72E0EA;">
                        <h5 class="p-4" align="center" id="titulo1" style="font-family: Verdana;">
                         Ejercicios Precision</h5>
                    </div>                            
                </div>
                <div class="col-md-3">
                    <div class=" " style="background:  pink;">
                        <h5 class="p-4" align="center" id="titulo1" style="font-family: Verdana;">
                        Ejercicios coordinacion</h5>
                    </div>                            
                </div>
            </div>
        </div>
        <br>
            <div class="row justify-content-center">
            	<div class="card mb-3" style="max-width: 540px; background: #B7EA72;">
				  <div class="row g-0">
				    <div class="col-md-4">
				      <img src="{{ asset('img/precision.jpeg') }}" with="200" height="200" class="card-img-top" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Ejercicio 1</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="card mb-3" style="max-width: 540px; background: #72E0EA;">
				  <div class="row g-0">
				    <div class="col-md-4">
				      <img src="{{asset('img/precision.jpeg')}}"  with="200" height="200" class="card-img-top" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Ejercicio 2</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="card mb-3" style="max-width: 540px; background: pink;">
				  <div class="row g-0">
				    <div class="col-md-4">
				      <img src="{{asset('img/precision.jpeg')}}" with="200" height="200" class="card-img-top" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Ejercicio 3</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
            </div>
	</div>

@endsection