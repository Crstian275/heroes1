<?php

namespace App\Http\Controllers;

use App\Heroe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\HeroeRequest;

class HeroeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Heroe::all();
        return view('heroe.index')->with(['heroes' => $heroes]);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heroe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeroeRequest $request)
    {
        $request->validated();
        $datos = $request->all();
        if($request->file('imagen')){
            $archivo = $request->file('imagen');
            $nombreArchivo = $archivo->getClientOriginalName();
            $archivo->move(public_path('img'), $nombreArchivo);
            $datos['imagen'] = 'img/' . $nombreArchivo;
        }
        $heroe = Heroe::create($datos);

        return redirect()->route('heroes.index')
            ->withSuccess("El Heroe con id {$heroe->id} se ha creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Heroe  $heroe
     * @return \Illuminate\Http\Response
     */
    public function show(Heroe $heroe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Heroe  $heroe
     * @return \Illuminate\Http\Response
     */
    public function edit(Heroe $heroe)
    {
        return view('heroe.edit')->with(['heroe'=>$heroe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Heroe  $heroe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heroe $heroe)
    {
        //$heroe->update($request->all());

        $datos = $request->all();

        if($request->file('imagen')){
            $archivo = $request->file('imagen');
            $nombreArchivo = $archivo->getClientOriginalName();
            $archivo->move(public_path('img'), $nombreArchivo);
            $datos['imagen'] = 'img/' . $nombreArchivo;
            File::delete($heroe->imagen);
        }

        $heroe->update($datos);


        return redirect()->route('heroes.index')
            ->withSuccess("El Heroe con id {$heroe->id} se ha actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Heroe  $heroe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heroe $heroe)
    {
        $heroe->delete();

        return redirect()->route('heroes.index')
        ->withSuccess("El Heroe con id {$heroe->id} se ha Eliminado");
    }
}
         