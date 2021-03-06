@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Lista de Heroes</h1>
	<a href="{{route('heroes.create')}}" class="myButton mb-3"><i class="fas fa-user-edit icono"></i></a>
	<table>
		<div class="responsive">
			<table class="table-striped">
				<thead class="thead-light">
					<tr>

				<th class="d-none d-md-table-cell"> id </th>
				<th> nombre </th>
				<th  class="d-none d-md-table-cell"> Titulo </th>
				<th class="d-none d-md-table-cell"> Descripcion </th>
				<th  class="d-none d-md-table-cell"> imagen </th>
				<th> Acciones </th>	
				</tr>
				</thead>
				<tbody>
					@foreach($heroes as $heroe)
					<tr>
					<td  class="d-none d-md-table-cell">{{$heroe->id}}</td>
					<td>{{$heroe->nombre}}</td>
					<td  class="d-none d-md-table-cell">{{$heroe->titulo}}</td>
					<td  class="d-none d-md-table-cell">{{$heroe->descripcion}}</td>
					<td  class="d-none d-md-table-cell">{{$heroe->imagen}}</td>
					<td>
						<a href="{{route('heroes.edit',['heroe'=>$heroe->id])}}"class="myButton mb-3 d-block text-center"><i class="fas fa-edit icono"></i></a>
						<form method="POST" class="d-inline" action="{{route('heroes.destroy',['heroe'=>$heroe->id])}}">
						   @csrf
						   @method('DELETE')
						   <button type="submit" class="myButton mb-3 d-block text-center" onclick="return confirm('¿Seguro que quieres eliminarlo?')"><i class="fas fa-trash-alt icono"></i></button>	
						</form>
						</td>   

					</tr>
					@endforeach

				</tbody>
			</table>
			
		</div>
	</table>
	
</div>

@endsection