
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registra Mesa</title>
</head>
<body style="text-align: center;">
  <h1 align="center">Registrar Mesa</h1>
  

<form action ="{{route('guardamesa')}}" method = 'POST'  aling="center">
{{csrf_field()}}

Clave <input type = 'text' name = 'id_mesa' value="{{$idms}}" readonly = 'readonly'>
<br>



@if($errors->first('id_mesa'))
<i> {{ $errors->first('id_mesa') }} </i>
@endif <br>

Seleccione zona<select class="form-control"  name = 'id_zona'>
@foreach($zonas as $cr)
<option class="form-control" id="exampleInputEmail1" placeholder="Enter email" value = '{{$cr->id_zona}}'>{{$cr->zona}}</option>
@endforeach
      </select>
<br>
<br>

<input type = 'submit' value = 'Guardar'>
  </form>
</body>
</html>