@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Ir a Web Cittyn</h1><br>
   
@stop 

@section('content')
	<a href="{{route('Cittyn.index')}}" target="_blank" class="btn btn-primary btn-block">
			          <i class="fas fa-chevron-circle-right" ></i> Web Cittyn 
	</a>	
@endsection

