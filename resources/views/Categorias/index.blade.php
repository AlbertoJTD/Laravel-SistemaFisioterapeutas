
@extends('layouts.plantilla')

@section('Titulo','Categorias')


@section('Contenido') 
		<div class="row">
            <div class="col-md-12">
                <div class="card m-4">
                    <div class="card-header">
                        <h3 class="mitexto card-title"> Lista de categorias </h3>
                    </div>
                    <a class="btn btn-primary col-md-2" href="{{route('categoria.create')}}">Crear Categoria</a>
                    <div class="card-body">
                        <table>
                        	<thead>
								<th class="mitexto">Nombre</th>
							</thead>
							<tbody>
				        		@foreach ($categoria as $catego)
				        		<tr>
									<td>
										<a class="mitexto btn btn-outline-secondary" href="{{route('categoria.show',$catego->id)}}">{{$catego->nombre}}</a>	
									</td>
							   	</tr>			
								@endforeach				
											
							    
							</tbody>
			 	       </table>
                     </div>
                </div>
            </div>            
        </div>
{{$categoria->links()}}
@endsection