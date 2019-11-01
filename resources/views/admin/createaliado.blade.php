@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

    <h1>CrearAliado</h1>
@stop

@section('content')

	<form method="POST" action="{{ route('Aliados.store') }}" files="true" enctype="multipart/form-data"> 
	@csrf
		<div class="form-group">
		    <label for="">Selecciona fondo de nuestro aliado</label>
		    <input type="file" id="imagen" name="imagen" required>
		</div>
	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
	
@endsection

