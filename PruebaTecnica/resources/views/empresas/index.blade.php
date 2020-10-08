@extends('layout')
@section('contenido')

		     <div class="col-md-1">
					<a class="btn btn-info " href="{{route('empresas.create')}}">Agregar empresa</a>
				</div>
					
			<div class="col-md-10">
				<div align="center">
				<table id="id_empresas" class="table table-responsive table-striped">
			<thead class="thead-dark">
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Nit</th>
					<th>Acciones</th>

				</tr>
			</thead>
		     <tbody>
		     	@foreach($empresas as $empresa)
		           <tr>
		           	<td>{{$empresa->id}}</td>
		           	<td>
		                <a href="{{route('empresas.show',$empresa->id)}}">
		           		{{$empresa->nombre}}</a></td>
		           	<td>{{$empresa->nit}}</td>
		           	<td>
		              <a class="btn btn-info btn-xs"  href="{{route('empresas.edit',$empresa->id)}}">Editar</a>

		              <form style="display: inline" method="POST" action="{{route('empresas.destroy',$empresa->id)}}">
		              	{!! csrf_field() !!}
		              	{!! method_field('DELETE') !!}
		              	<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
		              </form>
		           	</td>
		           </tr>
		        @endforeach
		     </tbody>
			</table>
		
			</div>
			</div>
						
			<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
   	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
   	<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script >
	$(document).ready(function() {
    $('#id_empresas').DataTable({

    	"lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
    });
} );
</script>


		


@stop