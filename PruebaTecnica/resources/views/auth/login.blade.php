@extends('layout')
@section('contenido')


<form class="form-inline"method="POST" action="/login">
	{!! csrf_field()!!}
	<div align="center">
		<h1>Inicio de sesion</h1>
	<p><input class="form-control" type="email" name="email" placeholder="Email"></p>
	<p><input class="form-control" type="password" name="password" placeholder="Password"></p>
	<p><input class="btn btn-primary" type="submit" value="Entrar"></p>
	</div>

</form>



@stop
