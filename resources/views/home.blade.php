@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Ir a Web Cittyn</h1><br>
   
@stop 

@section('content')
	<button type="button" class="btn btn-primary btn-block" onclick="window.location='{{ URL::route('Cittyn.index')}}'">Web Cittyn</button>
@endsection

