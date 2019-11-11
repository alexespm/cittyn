@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido en la Frase de web Cittyn</h1>
@stop

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif
<!-- tabla mainbanner -->
<div class="table-responsive">
	<h3>Frase</h3>
	<table class="table" style="width:auto; height:20px;">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		     	<th scope="col">Frase</th>
		      	<th scope="col">Fondo</th>
		      	<th scope="col"></th>
		      	<th scope="col">Accion</th>
	    	</tr>
	  	</thead>
		<tbody>
			@foreach($Frase as $ItemFrase)
			<tr>
				<th scope="row">{{ $ItemFrase->id }}</th>
				<td>{{ $ItemFrase->frase }}</td>
				<td><img src="images/{{$ItemFrase->background}}" class="css-class" width="100" height="100" /></td>
				<td>{{$ItemFrase->background}}</td>
				<td>
			        <a href="{{route('Frase.edit',$ItemFrase->id)}}" class="btn btn-success btncolorblanco">
			          <i class="fa fa-edit"></i> Actualizar web cittyn 
			        </a>
			        <!-- <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal1">
    					Actualiza Contenido
					</a> -->			   
			    </td>			        
		    </tr>
		    @endforeach 
		</tbody>
	</table>
</div>
@endsection
