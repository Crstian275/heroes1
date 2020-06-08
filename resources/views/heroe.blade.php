@extends('layouts.app')
@section('content')
  <h1 class="text-center text-md-left titulo">{{$heroe->nombre}}</h1>
 <div class="row">
  	<div class="col-12 col-md-6">
  		<img src="{{ asset($heroe->imagen)}}
  		"alt="imagen de (($heroe->nombre))"
  		class="img-fluid p-4">

  	</div>
  	  <div class="col-12 text-center col-md-6 text-md-left align-self-md-center">
  	   	 <h4>{{ $heroe -> titulo }}</h4>
  	   	 <p>{{ $heroe->descripcion}}</p>
  	   	

  	  </div>
  	
 </div>
@endsection 