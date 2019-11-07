@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar footer</h1>
@stop

@section('content')

	<form method="POST" action="{{ route('Footer.update', $Footer->id) }}" files="true" enctype="multipart/form-data"> 
	@method('PUT')	
	@csrf
	<div class="form-group">
		   	<label>Centro universitario</label>
		    <textarea class="form-control" id="contenido" rows="3" name="cu">{{$Footer->CU}}</textarea>
		</div>
		<div class="form-group">
		   	<label>Direcion Centro Universitario</label>
		    <textarea class="form-control" id="contenido" rows="3" name="direccion">{{$Footer->direccion}}</textarea>
		</div>
		<div class="form-group">
		   	<label>Telefono de contacto</label>
		    <textarea class="form-control" id="contenido" rows="3" name="telefono">{{$Footer->telefono}}</textarea>
		</div>
		<div class="form-group">
			<label>Url de icono 1</label>
			<textarea class="form-control" id="contenido" rows="3" name="imagen1">{{$Footer->imagen1}}</textarea>
		</div>
		<div class="form-group">
			<label>Url de icono 2</label>
			<textarea class="form-control" id="contenido" rows="3" name="imagen2">{{$Footer->imagen2}}</textarea>
		</div>
	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
	
@endsection