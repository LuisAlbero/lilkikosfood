		<!DOCTYPE html>
		<html>
		<head>
			<title>Alta Usuarios</title>
		</head>

		

		<body>
				<center>	<h1>Alta Usuarios</h1></center>

			
			<div align="center" class="row">
			<form role="form" action="{{route('guardausuarios')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_usuario'))
		        <i> {{ $errors->first('id_usuario') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_usuario">ID Usuario:</label>
				<input type="text" placeholder="Clave..." name="id_usuario" value="{{$id_usr}}" readonly='readonly'><br>
				</div>

				@if($errors->first('login'))
		        <i> {{ $errors->first('login') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="login">Login:</label>
				<input type="text" placeholder="Usuario" name="login" value="{{old('login')}}"><br>
				</div>

				@if($errors->first('password'))
		        <i> {{ $errors->first('password') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="password">Password:</label>
				   <input type="text" placeholder="Password" name="password" value="{{old('password')}}"><br>
				</div>

				

				@if($errors->first('tipo_de_usuario'))
		        <i> {{ $errors->first('tipo_de_usuario') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="tipo_de_usuario">Tipo de usuario:</label>
				 <input type="text" placeholder="Tipo de usuario..." name="tipo_de_usuario" value="{{old('tipo_de_usuario')}}"><br><br>

				</div>

				Selecciona tu nombre de empleado<select name="id_empleado">
				@foreach($empleados as $cr)
				<option value= '{{$cr->id_empleado}}'> {{$cr->nombre}} 
				</option>	
				@endforeach
				</select>
				<br><br>

				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
			
		</body>
		</html>

