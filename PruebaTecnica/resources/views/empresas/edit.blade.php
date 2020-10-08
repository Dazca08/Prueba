@extends('layout')
@section('contenido')

<div class="container" align="center">


	<div class="row">
		<div class="col-md-6">
			
			<a class="btn btn-info " href="{{route('empresas.index')}}">Volver</a>
		</div>
      

	</div>
	<h1>Editar empresa</h1>
	<form method="POST" action="{{route('empresas.update',$empresa->id)}}">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
	<p><label for="nombre">
		nombre
		<input class="form-control" type="text" name="nombre" value="{{$empresa->nombre}}">
		{!! $errors->first('nombre' ,'<span class=error>:message</span>')!!}
	</label></p>

	<p><label for="nit">
		nit
		  <input class="form-control" type="number" name="nit" value="{{$empresa->nit}}">
		  {!! $errors->first('nit','<span class=error>:message</span>')!!}
	</label></p>
 

  
	<p><input class= "btn btn-primary"type="submit" value="enviar"></p>
</form>
@stop
</div>

