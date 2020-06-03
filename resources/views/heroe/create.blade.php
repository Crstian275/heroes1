@extends('layouts.plantilla')

@section('content')
<div class="container">
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
			<input type="text" name="descripcion" class="form-control"required>
			
		</div>

		<div class="form row">
			<label>Imagen</label>
			<input type="file" name="imagen" class="form-control-file">
			
		</div>
		<button type="submit" class="myButton mt-4 d-block text-center">Enviar</button>


	</form>
</div>

@endsection