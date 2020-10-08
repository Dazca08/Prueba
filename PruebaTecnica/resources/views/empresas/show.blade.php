@extends('layout')
@section('contenido')
<h1>Detalle Empresa</h1>
<p>Empresa llamada  {{$empresa->nombre}} </p>
<p>NIT de la empresa {{$empresa->nit}}</p>

@stop