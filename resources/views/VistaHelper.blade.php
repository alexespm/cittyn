@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido en el Helper de web Cittyn</h1>
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
	<h3>Helper</h3>
	<table class="table" style="width:auto; height:20px;">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		      	<th scope="col">Icono</th>
		      	<th scope="col"> </th>
		     	<th scope="col">Titulo</th>
		      	<th scope="col">Contenido</th>
		      	<th scope="col">Accion</th>
	    	</tr>
	  	</thead>
		<tbody>
			@foreach($Helper as $ItemHelper)
			<tr>
				<th scope="row">{{ $ItemHelper->id }}</th>
				
				<td><img src="images/iconos/{{$ItemHelper->imagen}}" class="css-class" width="100" height="100" /></td>
				<td>{{ $ItemHelper->imagen }}</td>
				<td>{{ $ItemHelper->titulo }}</td>
				<td>{{ $ItemHelper->contenido }}</td>

				<td>
			        <a href="{{route('Helper.edit',$ItemHelper->id)}}" class="btn btn-success btncolorblanco">
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