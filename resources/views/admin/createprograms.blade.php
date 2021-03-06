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

    <h1>Crear Programa</h1>
@stop

@section('content')

	<form method="POST" action="{{ route('Programas.store') }}" files="true" enctype="multipart/form-data"> 
	@csrf
		<div class="form-group">
			<label>Elige color de fondo</label>
			<input name="color" id="color" type="" autocomplete="off" />
		</div>
		<div class="form-group">
		    <label for="exampleFormControlInput1">Titulo</label>
		    <input type="text" class="form-control" id="Titulo" name="titulo">
	  	</div>
		<div class="form-group">
		   	<label for="exampleFormControlTextarea1">Contenido</label>
		    <textarea class="form-control" id="contenido" rows="3" name="contenido" ></textarea>
		</div>
		<br>
		<div class="form-group">
			<label>Imagen de fondo</label>
			<div class="row">
			  	<div class="col-sm-2 imgUp">
			    	<div class="imagePreview" ></div>
					<label class="btn btn-primary">
						Elige una Imagen<input type="file" class="uploadFile img" value="Upload Photo" name="imagen" id="imagen" style="width: 0px;height: 0px;overflow: hidden;">
					</label>
					<span class="text-danger">{{ $errors->first('imagen') }}</span>
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