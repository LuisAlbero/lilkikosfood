@extends('sistema.principal')

  @section('contenido')

  

<form  class="formulariodo" action ="{{route('guardamesa')}}" method = 'POST'  aling="center">
{{csrf_field()}}

		<div class="contenedor">
		<h2 class="title"> REGISTRO MESA</h2>
<p class="sub">ID:</p> <input class="input48" type = 'text' name = 'id_mesa' value="{{$idms}}" readonly = 'readonly'>




@if($errors->first('id_mesa'))
<i> {{ $errors->first('id_mesa') }} </i>
@endif <br>

<p class="sub">Seleccione zona</p><select class="form-control"  name = 'id_zona'>
@foreach($zonas as $cr)
<option class="input48" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value = '{{$cr->id_zona}}'>{{$cr->zona}}</option>
@endforeach
      </select>
<br>
<br>


		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
@stop