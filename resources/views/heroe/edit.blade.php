@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Modificaciòn</h1>
	<form method="POST" action="{{route('heroes.update',['heroe'=>$heroe->id])}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form row">
			<label>nombre</label>
			<input type="text" name="nombre" class="form-control" value="{{$heroe->nombre}}" required>
			
		</div>
		<div class="form row">
			<label>Titulo</label>
			<input type="text" name="titulo" class="form-control"value="{{$heroe->titulo}}" required>
			
		</div>

		<div class="form row">
			<label>Descripcion</label>
			<textarea name="descripcion" class="form-control" rows="4" required>{{$heroe->descripcion}}
			</textarea>
			
		</div>

		<div class="form row">
			<label>Imagen</label>
			<input type="file" name="imagen" class="form-control-file" value="{{$heroe->imagen}}">
			
		</div>
		<button type="submit" class="myButton mt-4 d-block text-center">Enviar</button>


	</form>
</div>

@endsection