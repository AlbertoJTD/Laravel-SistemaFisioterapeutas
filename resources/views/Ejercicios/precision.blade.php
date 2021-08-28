@extends('layouts.plantilla')

@section('Titulo','Ejercicios de precision')

@section('Contenido')
		<div class="row">
            <div class="col-md-12">
                <div class="card m-4">
                    <div class="card-header">
                        <h3 class="card-title"> Lista de ejercicios </h3>
                    </div>									  
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                        	<thead>
								<th>Nombre</th>
								<th>Descripcion</th>
							</thead>

							<tbody>
							      	@foreach ($ejercicio as $ejerci)
							      	<tr>
										<td>
					        				<a href="{{route('ejercicio.show',$ejerci->id)}}">{{$ejerci->nombre}}</a>

										</td>
							    		<td>
							    			{{$ejerci->descripcion}}
							    		</td>
							   		</tr>
							   		@endforeach	 
							   		<tr>
							   			
							   		</tr>
							</tbody>
			 	       </table>
                     </div>
                </div>
            </div>            
        </div>
@endsection