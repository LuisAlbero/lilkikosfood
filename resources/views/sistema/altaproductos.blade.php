		<!DOCTYPE html>
		<html>
		<head>
			<title>Alta Productos</title>
		</head>

		

		<body>
				<center>	<h1>Alta Productos</h1></center>

			
			<div align="center" class="row">
			<form role="form" action="{{route('guardaproductos')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_producto'))
		        <i> {{ $errors->first('id_producto') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_producto">ID Producto:</label>
				<input type="text" placeholder="Clave..." name="id_producto" value="{{$id_usr}}" readonly='readonly'><br>
				</div>

				@if($errors->first('nombre'))
		        <i> {{ $errors->first('nombre') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="nombre">Nombre:</label>
				<input type="text" placeholder="Nombre" name="nombre" value="{{old('nombre')}}"><br>
				</div>

				@if($errors->first('descripcion'))
		        <i> {{ $errors->first('descripcion') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="descripcion">Descripcion:</label>
				   <input type="text" placeholder="descripcion" name="descripcion" value="{{old('descripcion')}}"><br>
				</div>

				

				@if($errors->first('precio'))
		        <i> {{ $errors->first('precio') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="precio">Precio:</label>
				 <input type="text" placeholder="Precio" name="precio" value="{{old('precio')}}"><br><br>

				</div>

				Selecciona tu nombre de empleado<select name="id_tipo_producto">
				@foreach($tipo_de_productos as $cr)
				<option value= '{{$cr->id_tipo_producto}}'> {{$cr->nombre}} 
				</option>	
				@endforeach
				</select>
				<br>

			<!--	@if($errors->first('archivo'))
		        <i> {{ $errors->first('archivo') }} </i>
		        @endif <br>
		        

				Selecciona foto: <input type="file" name= "archivo"><br>
				-->
				<br>

				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
			
		</body>
		</html>

