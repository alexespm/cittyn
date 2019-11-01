@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar Helper</h1>
@stop

@section('content')

	<form method="POST" action="{{ route('Helper.update', $Helper->id) }}" files="true" enctype="multipart/form-data"> 
	@method('PUT')	
	@csrf
		<div class="form-group">
		    <label for="exampleFormControlInput1">Etiqueta "h4"</label>
		    <input type="text" class="form-control" id="Titulo" name="titulo" value="{{$Helper->titulo}}">
	  	</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Etiqueta "p"</label>
		    <textarea class="form-control" id="contenido" rows="3" name="contenido" >{{$Helper->contenido}}</textarea>
		</div>
		<div class="form-group">
		    <label for="">Cambiar Icono</label>
		    <input type="file" id="imagen" name="imagen" required>
		</div>
	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
	
@endsection


 

