<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<select class="form-control" id="selectbox">
	<option value="#">Selecciona una opcion</option>
    <option value="#myModal1">Main banner</option>
    <option value="#myModal2">Helper</option>
	<option value="#myModal3">Jokers Wild Inc.</option>
</select>

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar Contenido</h1>
    <script src={{ asset('js/scripts.js') }}></script>
@stop



@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Mensajes</h2>
            </div>
            @if ($mensajes->isEmpty())
                <div>No hay Mensajes</div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Contenido</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mensajes as $mensaje)
                            <tr>
                                <td>{!! $mensaje->id !!}</td>
                                <td>{!! $mensaje->titH1 !!}</td>
                                <td>{!! $mensaje->title !!}</td>
                                <td>
                                    <a href="" class="btn btn-success btncolorblanco">
                                      <i class="fa fa-edit"></i> Validar en blog 
                                    </a>

                                    
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection

@include('Edicion.main_banner')
<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal1">
    Nueva tarea
</a>
 


