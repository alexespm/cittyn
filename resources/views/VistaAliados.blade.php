@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido en Aliados de web Cittyn</h1>
@stop

@section('content')
<!-- tabla mainbanner -->

<div class="table-responsive">
	<h3>Aliados</h3>
	<div class="row float-right">
	    <a href="{{route('Aliados.create')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Aliado</a>
	</div>
	<table class="table table-responsive" >
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		      	<th scope="col">Imagen</th>
		      	<th scope="col"></th>
		      	<th scope="col">Accion</th>
	    	</tr>
	  	</thead>
		<tbody>
			@foreach($Aliados as $ItemAliados)
			<tr>
				<th scope="row">{{ $ItemAliados->id }}</th>
				<td><img src="images/patrocinadores/{{$ItemAliados->imagen}}" class="css-class" width="100" height="100" /></td>
				<td>{{$ItemAliados->imagen}}</td>
				<td>
			        <a href="{{route('Aliados.edit',$ItemAliados->id)}}" class="btn btn-success btncolorblanco">
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