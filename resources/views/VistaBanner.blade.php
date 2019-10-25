@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido en el Banner de web Cittyn</h1>
@stop

@section('content')
<!-- tabla mainbanner -->

<div class="table-responsive">
	<h3>main banner</h3>
	<table class="table" style="width:auto; height:20px;">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		     	<th scope="col">Titulo</th>
		      	<th scope="col">Contenido</th>
		      	<th scope="col">Imagen</th>
		      	<th scope="col">Accion</th>
	    	</tr>
	  	</thead>
		<tbody>
			@foreach($Banner as $ItemBanner)
			<tr>
				<th scope="row">{{ $ItemBanner->id }}</th>
				<td>{{ $ItemBanner->titH1 }}</td>
				<td>{{ $ItemBanner->title }}</td>
				<td><img src="images/{{$ItemBanner->imagen}}" class="css-class" width="100" height="100" /></td>
				<td>{{$ItemBanner->imagen}}</td>
				<td>
			        <a href="{{route('Banner.edit',$ItemBanner->id)}}" class="btn btn-success btncolorblanco">
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
