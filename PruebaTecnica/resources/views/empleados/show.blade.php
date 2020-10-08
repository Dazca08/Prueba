@extends('layout')
@section('contenido')
<h1>Detalle Empleado</h1>
<p>Empleado llamado  {{$empleado->nombre}} , {{$empleado->apellido}} </p>
<p>id_cargo {{$empleado->id_cargo}}</p>

@stop