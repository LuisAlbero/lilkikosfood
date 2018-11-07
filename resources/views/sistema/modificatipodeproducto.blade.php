<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modifica Clientes</title>
</head>
<body>
	<h1 align="center">Modifica TIPO DE PRODUCTO</h1>
	<form action ="{{route('guardaediciontipodeproducto')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_tipodeproducto'))
		<i> {{ $errors->first('id_tipodeproducto') }} </i> 
		@endif	<br>

		Clave : <input type = 'text' name = 'id_tipodeproducto' value="{{$infom->id_tipodeproducto}}" readonly = 'readonly'>
		<br><br>
		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>

		Nombre: <input type = 'text' name = 'nombre' value="{{$infom->nombre}}">
		<br>
		<br>





		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>