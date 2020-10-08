@extends('layout')
@section('contenido')

<div class="container" align="center">
	<div class="row">
		<div class="col-md-6">
			
			<a class="btn btn-info " href="{{route('empleados.index')}}">Volver</a>
		</div>
      

	</div>
	<h1>Editar empleado</h1>
	<form method="POST" action="{{route('empleados.update',$empleado->id)}}">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
	<p><label for="nombre">
		nombre
		<input class="form-control" type="text" name="nombre" value="{{$empleado->nombre}}">
		{!! $errors->first('nombre' ,'<span class=error>:message</span>')!!}
	</label></p>

	<p><label for="apellido">
		apellido
		<input class="form-control" type="text" name="apellido" value="{{$empleado->apellido}}">
		{!! $errors->first('apellido' ,'<span class=error>:message</span>')!!}
	</label></p>

	<p><label for="id_cargo">
		id_cargo
		  <input class="form-control" type="number" name="id_cargo" value="{{$empleado->id_cargo}}">
		  {!! $errors->first('id_cargo','<span class=error>:message</span>')!!}
	</label></p>
 

  
	<p><input class= "btn btn-primary"type="submit" value="enviar"></p>
</form>
@stop
</div>
