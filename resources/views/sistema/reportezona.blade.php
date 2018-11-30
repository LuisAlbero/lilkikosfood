@extends('sistema.principal')

  @section('contenido')
		<h2 class="titlea"> REPORTE ZONA</h2>
	<table border="1" align="center">
		<thead>
		<tr><td>Clave</td><td>Zona</td><td>Descripcion</td><td>Activo</td><td>Descripciòn</td>			
		</tr></thead>
		@foreach($zonas as $ab)

			<tr><td>{{$ab->id_zona}}</td>
             <td>{{$ab->zona}}</td>
                          <td>{{$ab->descripcion}}</td>
                                                    <td>{{$ab->activo}}</td>


              
           <td> <a href="{{URL::action('zona@eliminazona', ['id_zona'=>$ab->id_zona])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>  
        </button></a>
				<a href="{{URL::action('zona@modificazona',['id_zona'=>$ab->id_zona])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </button></a>
			</td></tr>
		@endforeach
	</table>
@stop>