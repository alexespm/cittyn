@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar Programa</h1>

@stop

@yield('javascript')
@section('content')

	<form method="POST" action="{{ route('Programas.update', $Programas->id) }}" files="true" enctype="multipart/form-data"> 
	@method('PUT')	
	@csrf
		<div class="form-group">
		    <label for="exampleFormControlInput1">Titulo</label>
		    <input type="text" class="form-control" id="Titulo" name="titulo" value="{{$Programas->titulo}}">
	  	</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Contenido</label>
		    <textarea class="form-control" id="contenido" rows="3" name="contenido" >{{$Programas->contenido}}</textarea>
		</div>
		<div class="form-group">
			<label>Elige color de fondo</label>
			<!-- <input name="color" type="color" value="" /> -->
			<input type="text" name="color" id="color" autocomplete="off">
		</div>
		<div class="form-group">
		    <label for="">Selecciona fondo</label>
		    <input type="file" id="imagen" name="imagen" required>
		</div>

	  	<button type="submit" class="btn btn-primary">Actualizar web cittyn</button>
	</form> 
	
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
    <script>
        $('#color').colorpicker();
    </script>
    <!-- <script>
    $('#color').colorpicker({});
	</script> -->
@stop