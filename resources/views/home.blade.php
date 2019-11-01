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

@endsection
