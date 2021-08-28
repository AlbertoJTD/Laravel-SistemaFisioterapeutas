
@extends('layouts.plantilla')

@section('Titulo','Ejercicios')


@section('Contenido') 
		<div class="row">
            <div class="col-md-12">
                <div class="card m-4">
                    <div class="card-header">
                        <h3 class="mitexto card-title"> Lista de usuarios </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                        	<thead>
								<th class="mitexto">Nombre</th>
								<th class="mitexto">Apellido1</th>
								<th class="mitexto">APellido2</th>
								<th class="mitexto">Foto</th>
								<th class="mitexto">Edad</th>
								<th class="mitexto">Nickname</th>
								<th class="mitexto">Correo</th>
								<th class="mitexto">Contra</th>
								<th class="mitexto">genero</th>
							</thead>

							<tbody>
							      	@foreach ($tabla as $ejerci)
							      	<tr>
										<td>
					        				<a class="mitexto btn btn-outline-secondary" href="{{route('usuario.show',$ejerci->id)}}">{{$ejerci->nombre}}
										</td>
										
							    		<td class="mitexto">
							    			{{$ejerci->ap1}}
							    		</td>
							    		<td class="mitexto">
							    			{{$ejerci->ap2}}
							    		</td>
							    		<td class="mitexto">
                                            <img src="{{asset($ejerci->foto) }}" alt="" width="30" height="30">
                                        </td>
							    		<td class="mitexto">
							    			{{$ejerci->edad}}
							    		</td>
							    		<td class="mitexto">
							    			{{$ejerci->nickname}}
							    		</td>
							    		<td class="mitexto">
							    			{{$ejerci->correo}}
							    		</td>
							    		<td class="mitexto">
							    			{{$ejerci->contra}}
							    		</td>
							    		<td class="mitexto">
							    			{{$ejerci->genero}}
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
{{$tabla->links()}}
@endsection