@extends('layouts.plantilla')

@section('Titulo','Suscripcion')

@section('Contenido') 
		<div class="form-group">
            <div class="row ">
                <div class="col-md-12">
                    <div class=" " style="border:none;">
                        <h2 class="p-5" align="center" id="titulo1" style="font-family: Verdana;">
                        <i>Paquetes disponibles</i></h2>
                    </div>                            
                </div>
            </div>
        </div>
        <br>
            <div class="row justify-content-around">
            	<div class="">
            	</div>
            	<div class="col-5">
	            	<div class="card mb-3" style="max-width: 540px;">
					  <div class="row g-0">
					    <div class="col-md-4">
					      <img src="img/compra.png" alt="paquete 1" width="200" height="200">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class=" mitexto card-title">Card title</h5>
					        <p class="mitexto card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					        <p class="card-text"> <button class="btn btn-primary">Comprar paquete 1</button></p>
					      </div>
					    </div>
					  </div>
					</div>
            	</div>
            	<div class="col-5">
	            	<div class="card mb-3" style="max-width: 540px;">
					  <div class="row g-0">
					    <div class="col-md-4">
					      <img src="img/compra.png" alt="paquete 2" width="200" height="200">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class=" mitexto card-title">Card title</h5>
					        <p class="mitexto card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					        <p class="card-text"> <button class="btn btn-primary">Comprar paquete 2</button></p>
					      </div>
					    </div>
					  </div>
					</div>
            	</div>
				<div class="">
            	</div>
            </div>
	</div>
@endsection