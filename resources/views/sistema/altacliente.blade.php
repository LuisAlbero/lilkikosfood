<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@section('contenido')
<h1> Alta de maestrmos </h1>
<br>
<form action = '{{route('guardarcliente')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_cliente')) 
<i> {{ $errors->first('id_cliente') }} </i> 
@endif	<br>
        

Clave CLIENTE <input type = 'text' name = 'id_cliente' value="{{$id_cl}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
<br>



@if($errors->first('apellido1')) 
<i> {{ $errors->first('apellido1') }} </i> 
@endif	<br>
Apellido Paterno<input type = 'text' name = 'apellido1' value="{{old('apellido1')}}" >
<br>

@if($errors->first('apellido2')) 
<i> {{ $errors->first('apellido2') }} </i> 
@endif	<br>
Apellido Materno<input type = 'text' name = 'apellido2' value="{{old('apellido2')}}" >
<br>


@if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif	<br>
telefono<input type = 'text' name = 'telefono' value="{{old('telefono')}}" >
<br>

@if($errors->first('email')) 
<i> {{ $errors->first('email') }} </i> 
@endif	<br>
email<input type  ='text' name = 'email' value="{{old('email')}}">
<br>

@if($errors->first('rfc')) 
<i> {{ $errors->first('rfc') }} </i> 
@endif	<br>
rfc<input type  ='text' name = 'rfc' value="{{old('rfc')}}">
<br>

@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif	<br>
Calle<input type  ='text' name = 'calle' value="{{old('calle')}}">
<br>

@if($errors->first('numero')) 
<i> {{ $errors->first('numero') }} </i> 
@endif	<br>
 numero<input type  ='text' name = 'numero' value="{{old('numero')}}">
<br>





@if($errors->first('colonia')) 
<i> {{ $errors->first('colonia') }} </i> 
@endif	<br>
colonia<input type  ='text' name = 'colonia' value="{{old('colonia')}}">
<br>



<br>
<input type = 'submit' value = 'Guardar'>
<br>
</form>


