<div class="table-responsive">
	<h2>main banner</h2>
	{{$Banner}}
	<table class="table">
	  	<thead>
		  	<tr>
		      	<th scope="col">#</th>
		     	<th scope="col">Titulo</th>
		      	<th scope="col">Contenido</th>
		      	<th scope="col">Imagen</th>
	    	</tr>
	  	</thead>
		<tbody>  	
			<tr>
				<th scope="row">{{ $Banner->id }}</th>
				<td>{{ $Banner->titH1 }}</td>
				<td>{{ $Banner->title }}</td>
				<td><img src="images/{{$Banner->imagen}}" class="css-class" width="100" height="100"/></td>
		    </tr>

		</tbody>
	</table>
</div>