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
		      	<th scope="col">Color</th>
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
				<td style="background-color:{{ $ItemProgramas->color }}"></td>
				<td><img src="images/{{$ItemProgramas->fondo}}" class="css-class" width="100" height="100" /></td>
				<td>{{$ItemProgramas->fondo}}</td>
				<td>
			        <a href="{{route('Programas.edit',$ItemProgramas->id)}}" class="btn btn-success btncolorblanco">
			          <i class="fa fa-edit"></i> Actualizar web cittyn 
			        </a>
			        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$ItemProgramas->id}})" data-target="#DeleteModal" class="btn btn-danger btncolorblanco">
			        	<i class="fa fa-trash"></i> Eliminar Programa
			        </a>
			    </td>			        
		    </tr>
		    @endforeach  
		</tbody>
	</table>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form id="deleteForm" action="{{route('Programas.destroy',$ItemProgramas->id)}}" method="post">
      		@method('DELETE')
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					¿Estás seguro que quieres eliminar el registro {{ $ItemProgramas->titulo }}?
				</p>
	      		<input type="text" name="category_id" id="cat_id" value="{{$ItemProgramas->id}}">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
	        <button type="submit" class="btn btn-warning">Si, Eliminar</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Otro modal -->
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog ">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are You Sure Want To Delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
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
	        var url = '{{ route("Programas.destroy", ":id") }}';
	        url = url.replace(':id', id);
	        $("#deleteForm").attr('action', url);
	    }

	    function formSubmit()
	    {
	        $("#deleteForm").submit();
	    }
	</script>
@endsection

