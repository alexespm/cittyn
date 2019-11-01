@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar patrocinadores</h1>
    
@stop

@section('content')

	<form method="POST" action="{{ route('Patrocinadores.update', $Patrocinador->id) }}" files="true" enctype="multipart/form-data"> 
	@method('PUT')	
	@csrf
	  	<div class="form-group">
		    <label for="">Selecciona tu logo</label>
		    <input type="file" id="imagen1" name="imagen1" required>
		</div>
		<div class="form-group">
			<label>Elige color de fondo</label>
			<!-- <input name="color" type="color" value="" /> -->
			<input type="text" name="colorpicker" id="colorpicker" autocomplete="off">
		</div>
		<div class="form-group">
		    <label for="">Selecciona tu logo de tu patrocinador</label>
		    <input type="file" id="imagen2" name="imagen2" required>
		</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Contenido</label>
		    <textarea class="form-control" id="contenido" rows="3" name="contenido" >{{$Patrocinador->contenido_patrocinador}}</textarea>
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
        $('#colorpicker').colorpicker();
    </script>
    <!-- <script>
    $('#color').colorpicker({});
	</script> -->
@stop


