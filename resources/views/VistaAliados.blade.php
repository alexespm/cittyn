@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenido en Aliados de web Cittyn</h1>
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
			        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$ItemAliados->id}})" data-target="#DeleteModal" class="btn btn-danger btncolorblanco">
			        	<i class="fa fa-trash"></i> Eliminar Aliado
			        </a>			   
			    </td>			        
		    </tr>
		    @endforeach  
		</tbody>
	</table>
</div>
<!-- modal eliminar -->
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog ">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">Eliminar Aliado</h4>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">¿Estás seguro que quieres eliminar Aliado}}?</p>
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
	        var url = '{{ route("Aliados.destroy", ":id") }}';
	        url = url.replace(':id', id);
	        $("#deleteForm").attr('action', url);
	    }

	    function formSubmit()
	    {
	        $("#deleteForm").submit();
	    }
	</script>
@endsection