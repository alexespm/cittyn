@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido de Quienes Somos en web Cittyn</h1>
@stop

@section('content')
<!-- tabla mainbanner -->

<div class="table-responsive">
	<h3>Quienes Somos</h3>
	<table class="table" style="width:auto; height:20px;">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		      	<th scope="col">Color Titulo Container</th>
		      	<th scope="col">Color texto</th>
		      	<th scope="col">Background</th>
		      	<th scope="col">Titulo</th>
		      	<th scope="col">Contenido</th>
		     	<th scope="col">Sub titulo 1</th>
		      	<th scope="col">Contenido 1</th>
		      	<th scope="col">Sub titulo 2</th>
		      	<th scope="col">Contenido 2</th>
		      	<th scope="col">Accion</th>
	    	</tr>
	  	</thead>
		<tbody>
			@foreach($Somos as $ItemSomos)
			<tr>
				<th scope="row">{{ $ItemSomos->id }}</th>
				<td><input name="color" type="color" value="{{$ItemSomos->color}}" disabled /></td>
				<td><input name="color" type="color" value="{{$ItemSomos->colortext}}" disabled /></td>
				<td><img src="images/{{$ItemSomos->background}}" class="css-class" width="100" height="100" /></td>
				<td>{{ $ItemSomos->acerca }}</td>
				<td>{{$ItemSomos->acontenido}}</td>
				<td>{{$ItemSomos->mision}}</td>
				<td>{{$ItemSomos->mcontenido}}</td>
				<td>{{$ItemSomos->vision}}</td>
				<td>{{$ItemSomos->vcontenido}}</td>
				<td>
			        <a href="{{route('Quienes-somos.edit',$ItemSomos->id)}}" class="btn btn-success btncolorblanco">
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