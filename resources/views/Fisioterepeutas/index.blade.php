@extends('layouts.plantilla')

@section('Titulo','Fisioterapeutas')

@section('Contenido') 
		<div class="row">
            <div class="col-md-12">
                <div class="card m-4">
                    <div class="card-header">
                        <h3 class="mitexto card-title"> Lista de fisioterapeutas</h3>
                    </div>
                    <a class="btn btn-primary col-md-2" href="{{route('fisioterapeuta.create')}}">Crear fisioterapeuta</a>
                    <div class="card-body">
                    	<table class="table table-hover table-striped">
                        	<thead>
								<th class="mitexto">Nombre</th>
								<th class="mitexto">Apellido1</th>
								<th class="mitexto">APellido2</th>
								<th class="mitexto">Foto</th>
								<th class="mitexto">Cedula</th>
								<th class="mitexto">Edad</th>
								<th class="mitexto">Telefono</th>
								<th class="mitexto">Correo</th>
							</thead>

							<tbody>
							      	@foreach ($fisioterapeuta as $fisio)
							      	<tr>
										<td >
					        				<a class="mitexto btn btn-outline-secondary" href="{{route('fisioterapeuta.show',$fisio->id)}}">{{$fisio->nombre}}</a>
										</td>
							    		<td class="mitexto">
							    			{{$fisio->ap1}}
							    		</td>
							    		<td class="mitexto">
							    			{{$fisio->ap2}}
							    		</td>
							    		<td>
                                            <img src="{{asset($fisio->foto) }}" alt="" width="30" height="30">
                                        </td>
							    		<td class="mitexto">
							    			{{$fisio->cedula}}
							    		</td>
							    		<td class="mitexto">
							    			{{$fisio->edad}}
							    		</td>
							    		<td class="mitexto">
							    			{{$fisio->telefono}}
							    		</td>
							    		<td class="mitexto">
							    			{{$fisio->correo}}
							    		</td>
							   		</tr>
							   		@endforeach		
							</tbody>
			 	       </table>
                    </div>
                </div>
            </div>            
        </div>
{{$fisioterapeuta->links()}}
@endsection