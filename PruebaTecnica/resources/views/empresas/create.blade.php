@extends('layout')	
@section('contenido')


@if(session()->has('info'))
	<h3>{{session('info')}}</h3>
@else

<div class="container" align="center">
	<div class="row">
		<div class="col-md-6">
			
			<a class="btn btn-info " href="{{route('empresas.index')}}">Volver</a>
		</div>
      

	</div>
	<h1>Agregar empresa</h1>
	<form method="POST" action="{{route('empresas.store')}}">
	{!! csrf_field() !!}
	<p><label for="nombre">
		nombre
		<input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
	
	</label></p>
 
	<p><label for="nit">
		nit
		<input class="form-control" type="number" name="nit" value="{{old('nit')}}">
		  {!! $errors->first('nit','<span class=error>:message</span>')!!}
	</label></p>
  
	<p><input  class="btn btn-primary" type="submit" value="enviar"></p>
</form>

</div>
@endif
@stop
