<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registra Clientes</title>
</head>
<body>
	<h1 align="center">Registrar empleado</h1>
	<form action ="{{route('guardatipodeproducto')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_tipodeproducto'))
		<i> {{ $errors->first('id_tipodeproducto') }} </i> 
		@endif	<br>

		Clave: <input type = 'text' name = 'id_tipodeproducto' value="{{$idTipAbs}}" readonly = 'readonly'>
		<br><br>



		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>
		Tipo de producto: <input type = 'text' name = 'nombre' value="{{old('nombre')}}">
		<br>
		<br>





		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>