@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar frase</h1>
@stop

@section('content')

	<form method="POST" action="{{ route('Frase.update', $Frase->id) }}" files="true" enctype="multipart/form-data"> 
	@method('PUT')	
	@csrf
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Etiqueta "p" de la frase</label>
		    <textarea class="form-control" id="contenido" rows="3" name="contenido">{{$Frase->frase}}</textarea>
		</div>
		<div class="form-group">
		    <label for="">Cambiar imagen</label>
		    <input type="file" id="imagen" name="imagen">
		</div>
	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
	
@endsection