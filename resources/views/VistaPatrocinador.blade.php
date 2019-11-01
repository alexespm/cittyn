@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido de los Patrocinadores en web Cittyn</h1>
@stop

@section('content')
<!-- tabla Programas -->

<div class="table-responsive">
	<h3>Patrocinadores</h3>
	<div class="row float-right">
	    <a href="{{route('Patrocinadores.create')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
	</div>
	<table class="table" style="width:auto; height:20px;">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		      	<th scope="col">Imagen</th>
		      	<th scope="col"></th>
		      	<th scope="col">Imagen Patrocinador</th>
		      	<th scope="col"></th>
		      	<th scope="col">contenido</th>
		      	<th scope="col">color</th>
		      	<th scope="col">Fondo</th>
		      	<th scope="col">Accion</th>
	    	</tr>
	  	</thead>
		<tbody>
			@foreach($Patrocinador as $ItemPatrocinador)
			<tr>
				<th scope="row">{{ $ItemPatrocinador->id }}</th>
				<td bgcolor="black"><img src="images/patrocinadores/{{$ItemPatrocinador->logo}}" class="css-class" width="100" height="100" /></td>
				<td>{{ $ItemPatrocinador->logo }}</td>
				<td><img src="images/patrocinadores/{{$ItemPatrocinador->logo_patrocinador}}" class="css-class" width="100" height="100" /></td>
				<td>{{ $ItemPatrocinador->logo_patrocinador }}</td>
				<td>{{$ItemPatrocinador->contenido_patrocinador}}</td>
				<td style="background-color:{{ $ItemPatrocinador->color }}"></td>
				<td><img src="images/patrocinadores/{{$ItemPatrocinador->background}}" class="css-class" width="100" height="100" /></td>
				<td>
			        <a href="{{route('Patrocinadores.edit',$ItemPatrocinador->id)}}" class="btn btn-success btncolorblanco">
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