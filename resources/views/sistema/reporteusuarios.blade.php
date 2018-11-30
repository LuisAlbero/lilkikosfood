@extends('sistema.principal')

  @section('contenido')
		<h2 class="titlea"> REPORTE USUARIO</h2>


	<table border="1" align="center">
		<thead>

	<tr><td>ID</td><td>Login</td><td>Password</td><td>Tipo de Usuario</td><td>Opciones</td></tr>
</thead>
	@foreach($usuarios as $ma)
		<tr><td> {{$ma->id_usuario}} </td>
		<td>{{$ma->login}}</td>
		<td>{{$ma->password}}</td>
		<td>{{$ma->tipo_de_usuario}}</td>

		<td><a href="{{URL::action('c_usuarios@eliminausuarios', ['id_usuario'=>$ma->id_usuario])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>  
        </button></a>
			<a href="{{URL::action('c_usuarios@modificausuarios', ['id_usuario'=>$ma->id_usuario])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></a></td></tr>
	@endforeach
</table>
@stop