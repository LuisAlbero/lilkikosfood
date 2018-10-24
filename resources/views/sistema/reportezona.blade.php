<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Zona</title>
</head>
<body>
	<h1 align="center">REPORTE ZONAS</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Zona</td><td>Descripcion</td><td>Activo</td><td>Descripciòn</td>			
		</tr>
		@foreach($zonas as $ab)

			<tr><td>{{$ab->id_zona}}</td>
             <td>{{$ab->zona}}</td>
                          <td>{{$ab->descripcion}}</td>
                                                    <td>{{$ab->activo}}</td>


              
                         
			<td><a href="#">Eliminar </a>
				<a href="{{URL::action('curso@modificam',['id_mesa'=>$ab->id_mesa])}}">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>