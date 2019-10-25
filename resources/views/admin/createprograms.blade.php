@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Crear Programa</h1>
@stop

@section('content')

	<form method="POST" action="{{ route('Programas.store') }}" files="true" enctype="multipart/form-data"> 
	@csrf
		<div class="form-group">
		    <label for="exampleFormControlInput1">Titulo</label>
		    <input type="text" class="form-control" id="Titulo" name="titulo">
	  	</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Contenido</label>
		    <textarea class="form-control" id="contenido" rows="3" name="contenido" ></textarea>
		</div>
		<div class="form-group">
		    <label for="">Selecciona fondo</label>
		    <input type="file" id="imagen" name="imagen" required>
		</div>
	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
	
@endsection

