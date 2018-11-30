@extends('sistema.principal')

  @section('contenido')
		<h2 class="titlea"> REPORTE PRODUCTO</h2>

<table align="center" border="1">
	<thead>

	<tr><td>ID</td><td>Nombre</td><td>Descripcion</td><td>Precio</td><td>Tipo de producto</td><!--<<td>ID.Producto</td>td>Archivo</td>--><td>Opciones</td></tr>
</thead>


	@foreach($productos as $ma)
		<tr><td> {{$ma->id_producto}} </td>
		<td>{{$ma->nombre}}</td>
		<td>{{$ma->descripcion}}</td>
		<td>{{$ma->precio}}</td>
		<td>{{$ma->id_tipodeproducto}}</td>

		<!--<td>{{$ma->id_tipo_producto}}</td>
		<td> <img src=" {{asset('archivo/'.$ma->archivo)}}" height="50" width="50"> </td>-->


		<td><a href="{{URL::action('c_productos@eliminaproductos', ['id_producto'=>$ma->id_producto])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>  
        </button></a>
			<a href="{{URL::action('c_productos@modificaproductos', ['id_producto'=>$ma->id_producto])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </button></a></td></tr>
	@endforeach
</table>
@stop