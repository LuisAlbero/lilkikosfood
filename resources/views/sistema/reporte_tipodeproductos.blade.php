@extends('sistema.principal')

  @section('contenido')
		<h2 class="titlea"> REPORTE TIPO DE PRODUCTOS</h2>
	<table border="1" align="center">
				<thead>	

		<tr><td>Clave</td><td>Nombre</td><td>Accion</td>	
		</tr></thead>
		@foreach($TipAb as $ab)

			<tr><td>{{$ab->id_tipodeproducto}}</td>
             <td>{{$ab->nombre}}</td>
              
             <td><a href="{{URL::action('controlador_tipodeproductos@eliminatipodeproducto', ['id_tipodeproducto'=>$ab->id_tipodeproducto])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>  
        </button></a>

				<a href="{{URL::action('controlador_tipodeproductos@modificatipodeproducto',['id_tipodeproducto'=>$ab->id_tipodeproducto])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </button></a></a>
			</td></tr>
		@endforeach
	</table>
@stop