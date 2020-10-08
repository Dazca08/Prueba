@extends('layout')
@section('contenido')
<div class="container" align="center">
			
				
			
				<div class="col-md-1">
					<a class="btn btn-info " href="{{route('empleados.create')}}">Agregar empleado</a>
				</div>
					
				
				
				
		       
			
			<div class="col-md-10">
				<div align="center">
				<table id="id_empleados" class="table table-responsive table-striped">
			<thead class="thead-dark">
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Id_Cargo</th>
					<th>Cargo</th>
					<th>Acciones</th>

				</tr>
			</thead>
		     <tbody>
		     	@foreach($empleados as $empleado)
		           <tr>
		           	<td>{{$empleado->id}}</td>
		           	<td>
		                <a href="{{route('empleados.show',$empleado->id)}}">
		           		{{$empleado->nombre}}</a></td>
		           	<td>{{$empleado->apellido}}</td>
		           	<td>{{$empleado->cargo_id}}</td>
		           	<td>{{$empleado->cargo->nombre}}</td>
		           	
		           	<td>
		              <a class="btn btn-info btn-xs"  href="{{route('empleados.edit',$empleado->id)}}">Editar</a>

		              <form style="display: inline" method="POST" action="{{route('empleados.destroy',$empleado->id)}}">
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
						
		</div>

</form>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
   	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
   	<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script >
	$(document).ready(function() {
    $('#id_empleados').DataTable({

    	"lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
    });
} );
</script>



@stop