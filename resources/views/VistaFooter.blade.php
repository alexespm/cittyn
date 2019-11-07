@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido en el Footer de web Cittyn</h1>
@stop

@section('content')
<!-- tabla mainbanner -->

<div class="table-responsive">
	<h3>Frase</h3>
	<table class="table" style="width:auto; height:20px;">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		     	<th scope="col">Ubicacion y contacto</th>
		      	<th scope="col">Icono 1</th>
		      	<th scope="col">Icono 2</th>
		      	<th scope="col">Accion</th>
	    	</tr>
	  	</thead>
		<tbody>
			@foreach($Footer as $ItemFooter)
			<tr>
				<th scope="row">{{ $ItemFooter->id }}</th>
				<td>
					{{$ItemFooter->CU}}<br>
					{{$ItemFooter->direccion}}<br>
					{{$ItemFooter->telefono}}<br>
				</td>
				<td><img src="{{$ItemFooter->imagen1}}" class="css-class" width="100" height="100" /></td>
				<td><img src="{{$ItemFooter->imagen2}}" class="css-class" width="100" height="100" /></td>
				<td>
			        <a href="{{route('Footer.edit',$ItemFooter->id)}}" class="btn btn-success btncolorblanco">
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