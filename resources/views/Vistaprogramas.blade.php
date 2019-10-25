@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido de los Programas en web Cittyn</h1>
@stop

@section('content')
<!-- tabla Programas -->

<div class="table-responsive">
	<h3>Programas</h3>
	<div class="row float-right">
	    <a href="{{route('Programas.create')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
	</div>
	<table class="table" style="width:auto; height:20px;">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		      	<th scope="col">Titulo</th>
		      	<th scope="col">Contenido</th>
		      	<th scope="col">Background</th>
		      	<th scope="col"></th>	
	    	</tr>
	  	</thead>
		<tbody>
			@foreach($Programas as $ItemProgramas)
			<tr>
				<th scope="row">{{ $ItemProgramas->id }}</th>
				<td>{{ $ItemProgramas->titulo }}</td>
				<td>{{ $ItemProgramas->contenido }}</td>
				<td><img src="images/{{$ItemProgramas->fondo}}" class="css-class" width="100" height="100" /></td>
				<td>{{$ItemProgramas->fondo}}</td>
				<td>
			        <a href="{{route('Programas.edit',$ItemProgramas->id)}}" class="btn btn-success btncolorblanco">
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