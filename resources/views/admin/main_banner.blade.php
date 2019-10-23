@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar Main-banner</h1>
@stop

@section('content')

	<form method="POST" action="{{ route('main_banner.update', $Banner->id) }}" files="true" enctype="multipart/form-data"> 
	@method('PUT')	
	@csrf
		<div class="form-group">
		    <label for="exampleFormControlInput1">Etiqueta "h1" de nombre 'class="titH1"'</label>
		    <input type="text" class="form-control" id="Titulo" name="titulo" placeholder="Ingrese nuevo titulo " value="{{$Banner->titH1}}">
	  	</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Etiqueta "p" de nombre 'class="title"'</label>
		    <textarea class="form-control" id="contenido" rows="3" name="contenido" value="{{$Banner->titH1}}"></textarea>
		</div>
		<div class="form-group">
		    <label for="">Cambiar imagen</label>
		    <input type="file" id="imagen" name="imagen">
		</div>
	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
	
@endsection


 


