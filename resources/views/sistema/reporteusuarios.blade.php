<!DOCTYPE html>
<html>
<head>
	<title>Reporte Usuarios</title>
</head>
<body>
<h1>Reporte Usuarios</h1>
<br>
<table border="1">
	<tr><td>ID</td><td>Login</td><td>Password</td><td>Tipo de Usuario</td><td>N.Empleado</td><td>Opciones</td></tr>
	@foreach($usuarios as $ma)
		<tr><td> {{$ma->id_usuario}} </td>
		<td>{{$ma->login}}</td>
		<td>{{$ma->password}}</td>
		<td>{{$ma->tipo_de_usuario}}</td>
		<td>{{$ma->id_empleado}}</td>

		<td><a href="{{URL::action('c_usuarios@eliminausuarios', ['id_usuario'=>$ma->id_usuario])}}">Eliminar</a>
			<a href="{{URL::action('c_usuarios@modificausuarios', ['id_usuario'=>$ma->id_usuario])}}">Modificar</a></td></tr>
	@endforeach
</table>
</body>
</html>