<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<select class="form-control" id="selectbox">
	<option value="#">Selecciona una opcion</option>
    <option value="#myModal1">Main banner</option>
    <option value="#myModal2">Helper</option>
	<option value="#myModal3">Jokers Wild Inc.</option>
</select>

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido en la web</h1>
@stop

@section('content')
<!-- tabla mainbanner -->
<div class="table-responsive">
	<h2>main banner</h2>
	<table class="table">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		     	<th scope="col">Titulo</th>
		      	<th scope="col">Contenido</th>
		      	<th scope="col">Imagen</th>
	    	</tr>
	  	</thead>
		<tbody>  	
			<tr>
				<th scope="row">{{ $Banner->id }}</th>
				<td>{{ $Banner->titH1 }}</td>
				<td>{{ $Banner->title }}</td>
				<td><img src="images/{{$Banner->imagen}}" class="css-class" /></td>
				<td>{{$Banner->imagen}}</td>
		    </tr>
		</tbody>
	</table>
</div>
<!-- tabla Helper -->
<div class="table-responsive">
	<h2>Helper</h2>
	<table class="table">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		     	<th scope="col">Icono</th>
		      	<th scope="col">Titulo</th>
		      	<th scope="col">Contenido</th>
	    	</tr>
	  	</thead>
		<tbody>  	
			<tr>
				<th scope="row">{{$Helper->id}}</th>
				<th>{{$Helper->imagen}}</th>
				<th>{{$Helper->titulo}}</th>
				<th>{{$Helper->contenido}}</th>
		    </tr>
		</tbody>
	</table>
</div>
@endsection
