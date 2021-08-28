@extends('layouts.plantilla')

@section('Titulo','Tipos de Usuario')

@section('Contenido') 

<div class="row">
            <div class="col-md-12">
                <div class="card m-4">
                    <div class="card-header">
                        <h3 class="mitexto card-title"> Lista de tipos de usuario </h3>
                    </div>
                    <a class="btn btn-primary col-md-2" href="{{route('tipo.create')}}">Crear tipo de usuario</a>
                    <div class="card-body">
                      
			 	       <table>
                        	<thead>
								<th class="mitexto">Nombre</th>
							</thead>
							<tbody>
				        		@foreach ($tipo as $tuser)
				        		<tr>
									<td>
										<a class="mitexto btn btn-outline-secondary" href="{{route('tipo.show',$tuser->id)}}">{{$tuser->nombre}}</a>
									</td>
							   	</tr>			
								@endforeach				
											
							    
							</tbody>
			 	       </table>
                     </div>
                </div>
            </div>            
        </div>

{{$tipo->links()}}
@endsection