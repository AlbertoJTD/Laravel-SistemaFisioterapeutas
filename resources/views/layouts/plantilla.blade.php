<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('Titulo')</title>
	<link rel="stylesheet" href="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	
	<style type="text/css" media="screen">
		*{
			background-color:@yield('Color') ;
		}
		@yield('css')
	</style>


</head>
<body>
	<div class="container-fluid">
			<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="{{route('inicio.index')}}">Dare you 👀</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="mitexto nav-link active" aria-current="page" href="{{route('inicio.index')}}"><i class="fas fa-home"></i>Inicio</a>
		        </li>
		        <li class="nav-item">
		          <a class="mitexto nav-link" href="{{route('ejercicio.index')}}"><i class="fas fa-dumbbell"></i> Ejercicios</a>
		        </li>
		        <li class="nav-item">
		          <a class="mitexto nav-link" href="{{route('suscripcion.index')}}"><i class="fas fa-shopping-bag"></i> Suscripcion</a>
		        </li>
		        <li class="nav-item">
		          <a class="mitexto nav-link " href="{{route('pregunta.index')}}" tabindex="-1" ><i class="far fa-question-circle"></i> Preguntas frecuentes</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="mitexto nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            <i class="fas fa-plus"></i> Mas acciones
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="mitexto dropdown-item" href="{{route('usuario.index')}}"><i class="fas fa-user"></i> Usuarios</a></li>
		            <li><a class="mitexto dropdown-item" href="{{route('fisioterapeuta.index')}}"><i class="fas fa-user-md"></i> Fisioterapeutas</a></li>
		            <li><a class="mitexto dropdown-item" href="{{route('categoria.index')}}"><i class="fas fa-list-ol"></i> Categorias</a></li>
		            <li><a class="mitexto dropdown-item" href="{{route('especialidad.index')}}"><i class="fas fa-clipboard-list"></i> Especialidades</a></li>
		            <li><a class="mitexto dropdown-item" href="{{route('tipo.index')}}"><i class="fas fa-address-book"></i> Tipos de usuarios</a></li>
		            <li><hr class="dropdown-divider"></li>
		          </ul>
		        </li>
		        <div class="btn-group " role="group" aria-label="Basic mixed styles example">
				  <button type="button" class="btn btn-outline-dark disminuir"><i class="fas fa-minus-circle"></i> Disminuir</button>
				  <button type="button" class="btn btn-outline-primary aumentar"><i class="fas fa-plus-circle"></i> Aumentar</button>
				  <button type="button" class="btn btn-outline-secondary restablecer"><i class="fas fa-undo-alt"></i> Restablecer</button>
				</div>
		      </ul>
		    </div>
		  </div>
		</nav>
		@yield('Contenido')

        
	</div>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	// Defino un tamaño de letra inicial de 16px
		function tamañoLetra() {
		  size = $(".mitexto" ).css("font-size");
		  size = parseInt(size, 10);
		  $( ".tamaño-actual" ).text(size);
		} 
		 
		// Obtengo el tamaño de letra inicial de 16px 
		tamañoLetra();

		// Función para disminuir el tamaño del texto (fuente) 
		$(".disminuir").on("click", function() {
		  if ((size - 2) >= 13) {
		    $(".mitexto").css("font-size", "-=2");
		    $(".tamaño-actual").text(size -= 1);
		  }
		});
		 
		// Función para aumentar el tamaño del texto (fuente) 
		$(".aumentar").on("click", function() { 
		  if ((size + 2) <= 21) {
		    $(".mitexto").css("font-size", "+=2");
		    $(".tamaño-actual").text(size += 1);
		  }
		});
		 
		// Función para restablecer el tamaño del texto (fuente) al tamaño inicial 
		$(".restablecer").on("click", function() {
		  $(".mitexto").css("font-size", "initial");
		  size = $(".mitexto" ).css("font-size");
		  size = parseInt(size, 10);
		  $( ".tamaño-actual" ).text(size);
		});
    </script>

    @yield('js')
</body>
</html>