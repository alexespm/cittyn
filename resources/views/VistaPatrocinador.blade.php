@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido de los Patrocinadores en web Cittyn</h1>
@stop

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif
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
			        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$ItemPatrocinador->id}})" data-target="#DeleteModal" class="btn btn-danger btncolorblanco">
			        	<i class="fa fa-trash"></i> Eliminar Programa
			        </a>			   
			    </td>			        
		    </tr>
		    @endforeach  
		</tbody>
	</table>
</div>

<!-- Modal -->
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog ">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">Eliminar Patrocinador</h4>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">¿Estás seguro que quieres eliminar al Patrocinador?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Si, Eliminar</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
  </div>
@endsection

@section('javascript')
	<script type="text/javascript">
		function deleteData(id)
	    {
	        var id = id;
	        var url = '{{ route("Patrocinadores.destroy", ":id") }}';
	        url = url.replace(':id', id);
	        $("#deleteForm").attr('action', url);
	    }

	    function formSubmit()
	    {
	        $("#deleteForm").submit();
	    }
	</script>
@endsection