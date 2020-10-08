@extends('layout')
@section('contenido')
<div class="container" align="center">
			
			<div class="col-md-8">
				<div align="center">
				<table id="id_tabla"class="table table-striped">
			<thead >
				<tr>
					<th>Id</th>
					<th>Empleado</th>
					<th>Empresa</th>
				</tr>
			</thead>
		     <tbody>
		     	@foreach($empleadosempresa as $empleadoempresa)
		           <tr>

		           	<td>{{$empleadoempresa->id}}</td>
		           	<td>{{$empleadoempresa->empleado->nombre}}</td>
		           	<td><a href="{{route('empresas.show',$empleadoempresa->empresa->id)}}">
		           		{{$empleadoempresa->empresa->nombre}}</a></td>
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
    $('#id_tabla').DataTable({

    	"lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
    });
} );
</script>
@stop