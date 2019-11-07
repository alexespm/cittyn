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
			<label>Cambiar Imagen de fondo</label>
			<div class="row">
			  	<div class="col-sm-2 imgUp">
			    	<div class="imagePreview" style="background-image: url('/images/{{$Somos->background}}');"></div>
			    	
					<label class="btn btn-primary">
						Elige una Imagen<input type="file" class="uploadFile img" value="Upload Photo" name="imagen" id="imagen" style="width: 0px;height: 0px;overflow: hidden;">
						
					</label>
			  	</div><!-- col-2 -->
			  	<i class="fa fa-plus imgAdd"></i>
			 </div><!-- row -->
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
	<script type="text/javascript">
	    	$(".imgAdd").click(function(){
	  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
	});
	$(document).on("click", "i.del" , function() {
		$(this).parent().remove();
	});
	$(function() {
	    $(document).on("change",".uploadFile", function()
	    {
	    	var uploadFile = $(this);
	        var files = !!this.files ? this.files : [];
	        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
	 		
	        if (/^image/.test( files[0].type)){ // only image file
	            var reader = new FileReader(); // instance of the FileReader
	            reader.readAsDataURL(files[0]); // read the local file
	 
	            reader.onloadend = function(){ // set image data as background of div
	                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
	uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
	            }
	        }
	      
	    });
	});
    </script>
@stop
