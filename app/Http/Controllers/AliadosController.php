<?php

namespace App\Http\Controllers;

use App\Aliados;
use Illuminate\Http\Request;

class AliadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Aliados = Aliados::all();      
        //return $Banner;
        return view('VistaAliados',compact('Aliados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createaliado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Aliados = new Aliados;
        $file = $request->file('imagen');
        $nombre = $file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('patrocinadores')->put($nombre,  \File::get($file));
        $Aliados->imagen = $nombre;
        $Aliados->save();
        return redirect()->route('Aliados.index')->with('datos','Registro Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aliados  $aliados
     * @return \Illuminate\Http\Response
     */
    public function show(Aliados $aliados)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aliados  $aliados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Aliados = Aliados::findOrFail($id);
        return view('admin.aliados',compact('Aliados')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aliados  $aliados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Aliados = Aliados::findOrFail($id);
        $file = $request->file('imagen');
        $nombre = $file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('patrocinadores')->put($nombre,  \File::get($file));
        $Aliados->imagen = $nombre;

        $Aliados->save();
        return redirect()->route('Aliados.index')->with('datos','Registro Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aliados  $aliados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Aliados = Aliados::findOrFail($id);
        $Aliados->delete();
        return redirect()->route('Aliados.index')->with('datos','Registro Eliminado Correctamente');
    }
}
