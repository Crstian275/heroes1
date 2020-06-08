@extends('layouts.app')

@section('content')
<div class="container text-center">
	<h1>Hèroe nuevo</h1>
	<form method="POST" action="{{route('heroes.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form row">
			<label>nombre</label>
			<input type="text" name="nombre" class="form-control"required>
			
		</div>
		<div class="form row">
			<label>Titulo</label>
			<input type="text" name="titulo" class="form-control"required>
			
		</div>

		<div class="form row">
			<label>Descripcion</label>
			<textarea name="descripcion" class="form-control" rows="4" required></textarea>
			
		</div>

		<div class="form row">
			<label>Imagen</label>
			<input type="file" name="imagen" class="form-control-file">
			
		</div>
		<div class="text-center">
		<button type="submit" class="myButton mt-4 text-center">Enviar</button>
</div>

	</form>
</div>

@endsection