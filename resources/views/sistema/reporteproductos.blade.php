<!DOCTYPE html>
<html>
<head>
	<title>Reporte Productos</title>
</head>
<body>
<h1>Reporte Productos</h1>
<br>
<table border="1">
	<tr><td>ID</td><td>Nombre</td><td>Descripcion</td><td>Precio</td><!--<<td>ID.Producto</td>td>Archivo</td>--><td>Opciones</td></tr>
	@foreach($productos as $ma)
		<tr><td> {{$ma->id_producto}} </td>
		<td>{{$ma->nombre}}</td>
		<td>{{$ma->descripcion}}</td>
		<td>{{$ma->precio}}</td>
		<!--<td>{{$ma->id_tipo_producto}}</td>
		<td> <img src=" {{asset('archivo/'.$ma->archivo)}}" height="50" width="50"> </td>-->


		<td><a href="{{URL::action('c_productos@eliminaproductos', ['id_producto'=>$ma->id_producto])}}">Eliminar</a>
			<a href="{{URL::action('c_productos@modificaproductos', ['id_producto'=>$ma->id_producto])}}">Modificar</a></td></tr>
	@endforeach
</table>
</body>
</html>