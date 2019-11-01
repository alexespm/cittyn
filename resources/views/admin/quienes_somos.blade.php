@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar Main-banner</h1>
@stop

@section('content')

	<form method="POST" action="{{ route('Quienes-somos.update', $Somos->id) }}" files="true" enctype="multipart/form-data"> 
	@method('PUT')	
	@csrf
		<div class="form-group">
		    <label for="exampleFormControlInput1">Etiqueta "h1" de titulo</label>
		    <input type="text" class="form-control" id="Titulo" name="titulo" value="{{$Somos->acerca}}">
	  	</div>	
	  	<div class="form-group">
		    <label for="exampleFormControlInput1">Color Etiqueta "h1" </label>
		    <input name="color" type="color" value="{{$Somos->color}}" />
	  	</div>
	  	<div class="form-group">
		    <label for="exampleFormControlInput1">Color Letras de Etiqueta "h1" </label>
		    <input name="colortext" type="color" value="{{$Somos->colortext}}" />
	  	</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Etiqueta "p" del titulo</label>
		    <textarea class="form-control" id="contenido" rows="3" name="acontenido">{{$Somos->acontenido}}</textarea>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlInput1">Etiqueta "h2" de primer Subtitulo</label>
		    <input type="text" class="form-control" id="Titulo" name="mision" value="{{$Somos->mision}}">
	  	</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Etiqueta "p" del primer h2</label>
		    <textarea class="form-control" id="contenido" rows="3" name="mcontenido">{{$Somos->mcontenido}}</textarea>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlInput1">Etiqueta "h2" de segundo Subtitulo</label>
		    <input type="text" class="form-control" id="Titulo" name="vision" value="{{$Somos->vision}}">
	  	</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Etiqueta "p" del segundo h2</label>
		    <textarea class="form-control" id="contenido" rows="3" name="vcontenido">{{$Somos->vcontenido}}</textarea>
		</div>
		<div class="form-group">
		    <label for="">Cambiar Background</label>
		    <input type="file" id="imagen" name="imagen">
		</div>
	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
	
@endsection


 
