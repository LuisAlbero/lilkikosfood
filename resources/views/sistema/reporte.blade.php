@extends('sistema.principal')

@section('contenido')
<h1>REPORTE DE MAESTROS</h1>
<table border= 1>
<tr><td>Clave</td><td>Nombre</td><td>Correo</td><td>Edad</td>
<td>Operaciones</td></tr>
@foreach($ma as $m)
<tr><td>{{$m->idm}}</td><td>{{$m->nombre}}</td>
<td>{{$m->correo}}</td><td>{{$m->edad}}</td>
<td>
<a href="{{URL::action('ejercicios@borramaestro',['idm'=>$m->idm])}}">
Eliminar</a> 
<a href="{{URL::action('ejercicios@modificamaestro',['idm'=>$m->idm])}}">
Modificar</a>
</td>

<a href = "eliminamaestro.php?idm=$idm">Eliminar </a>
</tr>
@endforeach
</table>
{{$ma->render()}}
@stop











