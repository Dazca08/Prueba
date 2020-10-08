@extends('layout')	
@section('contenido')


@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<div class="container" align="center">
	<div class="row">
		<div class="col-md-6">
			
			<a class="btn btn-info " href="{{route('empleados.index')}}">Volver</a>
		</div>
      

	</div>
	<h1>Agregar empleado</h1>
	<form method="POST" action="{{route('empleados.store')}}">
	{!! csrf_field() !!}
	<p><label for="nombre">
		nombre
		<input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
	
	</label></p>

	<p><label for="apellido">
		Apellido
		<input class="form-control" type="text" name="apellido" value="{{old('apellido')}}">
	
	</label></p>
 
	<p><label for="id_cargo">
		id_cargo
		<input class="form-control" type="number" name="id_cargo" value="{{old('id_cargo')}}">
		  {!! $errors->first('nit','<span class=error>:message</span>')!!}
	</label></p>
  
	<p><input  class="btn btn-primary" type="submit" value="enviar"></p>
</form>

</div>
@endif
@stop