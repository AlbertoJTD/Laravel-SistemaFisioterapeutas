
@extends('layouts.plantilla')

@section('Titulo','Regristrar Usuario')

@section('Color','#C7DAEB')

@section('Contenido') 
<a href="{{route('categoria.create')}}">Crear usuario</a>
<ul>
	@foreach ($categoria as $catego)
		<li>{{$catego->nombre}}</li>
	@endforeach
</ul>

{{$categoria->links()}}
@endsection