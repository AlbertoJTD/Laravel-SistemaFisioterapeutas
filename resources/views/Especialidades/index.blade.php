 @extends('layouts.plantilla')

@section('Titulo','Especialidades')


@section('Contenido') 

<div class="row">
            <div class="col-md-12">
                <div class="card m-4">
                    <div class="card-header">
                        <h3 class="mitexto card-title"> Lista de especialidad</h3>
                    </div>
                    <a class="btn btn-primary col-md-2" href="{{route('especialidad.create')}}">Crear especialidad</a>
                    <div class="card-body">
                        
			 	       <table>
                        	<thead>
								<th class="mitexto">Nombre</th>
							</thead>
							<tbody>
				        		@foreach ($especialidad as $espe)
				        		<tr>
									<td>
										<a class="mitexto btn btn-outline-secondary" href="{{route('especialidad.show',$espe->id)}}">{{$espe->especialidad}}</a>
									</td>
							   	</tr>			
								@endforeach				
											
							    
							</tbody>
			 	       </table>
                     </div>
                </div>
            </div>            
        </div>

{{$especialidad->links()}}
@endsection