
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registra Mesa</title>
</head>
<body style="text-align: center;">
  <h1 align="center">Registrar Zona</h1>
  

<form action ="{{route('guardazona')}}" method = 'POST'  aling="center">
{{csrf_field()}}

Clave <input type = 'text' name = 'id_zona' value="{{$idms}}" readonly = 'readonly'>
<br>



@if($errors->first('id_zona'))
<i> {{ $errors->first('id_zona') }} </i>
@endif <br>

	@if($errors->first('zona')) 
		<i> {{ $errors->first('zona') }} </i> 
		@endif	<br>
		Zona: <input type = 'text' name = 'zona' value="{{old('zona')}}">
		<br>
		<br>
			@if($errors->first('descripcion')) 
		<i> {{ $errors->first('descripcion') }} </i> 
		@endif	<br>
		Descripcion: <input type = 'text' name = 'descripcion' value="{{old('descripcion')}}">
		<br>
		<br>

			@if($errors->first('activo')) 
		<i> {{ $errors->first('activo') }} </i> 
		@endif	<br>
<label for="terms">Activo</label><br>
Activo<input type="checkbox" name="activo" id="activo" value="Si" >SI		
<input type="checkbox" name="activo" id=activo" value="No" >NO		<br>

		<br>




<br>
<br>

<input type = 'submit' value = 'Guardar'>
  </form>
</body>
</html>