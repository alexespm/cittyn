@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar aliados</h1>
@stop



@section('content')
    <form method="POST" action="{{ route('Aliados.update', $Aliados->id) }}" files="true" enctype="multipart/form-data"> 
	@method('PUT')	
	@csrf
		<div class="form-group">
		    <label for="">Selecciona fondo de nuestro aliado</label>
		    <input type="file" id="imagen" name="imagen" required>
		</div>
	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
@endsection

