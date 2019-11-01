<?php

namespace App\Http\Controllers;

use App\helper;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Helper = helper::all();
        //return $Helper;      
        return view('VistaHelper',compact('Helper'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\helper  $helper
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $id=1;
        // $Helper= helper::findOrFail($id);
        // return view('home',compact('Helper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\helper  $helper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Helper = helper::where('id',  '=', $id)->first();
        return view('admin.helper', compact('Helper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\helper  $helper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Helper = helper::findOrFail($id);

        $file = $request->file('imagen');
        
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('icon')->put($nombre,  \File::get($file));

        //$Helper->fondo = $request->color;

        $Helper->titulo = $request->titulo;
        $Helper->contenido = $request->contenido;
        $Helper->imagen = $nombre;
        
        $Helper->save();
        return'Registro actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\helper  $helper
     * @return \Illuminate\Http\Response
     */
    public function destroy(helper $helper)
    {
        //
    }
}
