@extends('adminlte::page')

@section('title', 'AdminLTE')

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="{{ asset('css/rgbaColorPicker.css') }}" />
    <script type="text/javascript" src="{{asset('js/rgbaColorPicker.js')}}"></script>
</head>

@section('content_header')

    <h1>Crear Patrocinador</h1>
@stop

@section('content')

	<form method="POST" action="{{ route('Patrocinadores.store') }}" files="true" enctype="multipart/form-data"> 
	@csrf
		<div class="form-group">
		    <label for="">Selecciona tu logo</label>
		    <input type="file" id="imagen1" name="imagen1" required>
		</div>
		<div class="form-group">
			<label>Elige color de fondo</label>
			<input name="color" id="color"type="" autocomplete="off" />
		</div>
		<div class="form-group">
		    <label for="">Selecciona tu logo de tu patrocinador</label>
		    <input type="file" id="imagen2" name="imagen2" required>
		</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Contenido</label>
		    <textarea class="form-control" id="contenido" rows="3" name="contenido" ></textarea>
		</div>
		<div class="form-group">
		    <label for="">Selecciona imagen fondo</label>
		    <input type="file" id="imagen3" name="imagen3" required>
		</div>
	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
	
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
    <script>
        $('#color').colorpicker();
    </script>
@stop