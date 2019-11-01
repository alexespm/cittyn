<?php

namespace App\Http\Controllers;

use App\QuienesSomos;
use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Somos = QuienesSomos::all();   
        return view('VistaSomos',compact('Somos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuienesSomos  $quienesSomos
     * @return \Illuminate\Http\Response
     */
    public function show(QuienesSomos $quienesSomos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuienesSomos  $quienesSomos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Somos = QuienesSomos::where('id',  '=', $id)->first();
        return view('admin.quienes_somos', compact('Somos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuienesSomos  $quienesSomos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Somos = QuienesSomos::findOrFail($id);
        $file = $request->file('imagen');
 
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));
 
        $Somos->acerca = $request->titulo;
        $Somos->color = $request->color;
        $Somos->colortext = $request->colortext;
        $Somos->acontenido = $request->acontenido;
        $Somos->mision = $request->mision;
        $Somos->mcontenido = $request->mcontenido;
        $Somos->vision = $request->vision;
        $Somos->vcontenido = $request->vcontenido;
        $Somos->background = $nombre;
        $Somos->save();
        return'Registro actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuienesSomos  $quienesSomos
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuienesSomos $quienesSomos)
    {
        //
    }
}
