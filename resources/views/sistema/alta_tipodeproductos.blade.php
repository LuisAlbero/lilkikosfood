@extends('sistema.principal')

  @section('contenido')

	<form class="formulariodo" action ="{{route('guardatipodeproducto')}}" method = 'POST' align="center">
		{{csrf_field()}}
		<div class="contenedor">
		<h2 class="title"> REGISTRO TIPO DE PRODUCTOS</h2>

		@if($errors->first('id_tipodeproducto'))
		<i> {{ $errors->first('id_tipodeproducto') }} </i> 
		@endif	

		<p class="sub">Clave:</p> <input class="input48" type = 'text' name = 'id_tipodeproducto' value="{{$idTipAbs}}" readonly = 'readonly'>
	



		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	
		<p class="sub">Nombre: </p> <input class="input48" type = 'text' name = 'nombre' value="{{old('nombre')}}">
		<br>
		<br>




	<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
@stop