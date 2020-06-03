<?php

namespace App\Http\Controllers;

  use Illuminate\Http\Request;
use App\Heroe;
class MainController extends Controller

  {
  	    public function index ()
    {
    	$heroes=Heroe::all();
    	return view('main')->with(['heroes' => $heroes]);
    	
    	}
    	public function show(Heroe $heroe)
    {
     
        return view('heroe')->with(['heroe' => $heroe]);
    }

}
