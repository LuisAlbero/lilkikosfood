<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Tipos de Abogados</title>
</head>
<body>
	<h1 align="center">REPORTE TIPO DE PRODUCTO</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Nombre</td><td>Accion</td>	
		</tr>
		@foreach($TipAb as $ab)

			<tr><td>{{$ab->id_tipodeproducto}}</td>
             <td>{{$ab->nombre}}</td>
              
                         
			<td>
				<a href="{{URL::action('controlador_tipodeproductos@eliminatipodeproducto',['id_tipodeproducto'=>$ab->id_tipodeproducto])}}">Eliminar</a>
				<a href="{{URL::action('controlador_tipodeproductos@modificatipodeproducto',['id_tipodeproducto'=>$ab->id_tipodeproducto])}}">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>