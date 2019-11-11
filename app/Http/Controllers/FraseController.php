<?php

namespace App\Http\Controllers;

use App\Frase;
use Illuminate\Http\Request;
use Validator,Redirect;
class FraseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Frase = Frase::all();  
        return view('VistaFrase',compact('Frase'));
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
     * @param  \App\Frase  $frase
     * @return \Illuminate\Http\Response
     */
    public function show(Frase $frase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Frase  $frase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Frase = Frase::where('id',  '=', $id)->first();
        return view('admin.frase', compact('Frase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Frase  $frase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Frase = Frase::findOrFail($id);
        $file = $request->file('imagen');
        if($file === NULL)
        {
            // En caso de que el hecho de subir una imagen sea opcional, si el usuario no sube ninguna, usamos la imagen por defecto
            $file =  $Frase->background;
            $Frase->background  = $file;
        }
        else
        {
            request()->validate([
                'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombre,  \File::get($file));
            $Frase->background = $nombre;
        }
       
        $Frase->frase = $request->contenido;
        $Frase->save();
        // return redirect()->route('Frase.index')->with('datos','Registro Actualizado Correctamente');
        return Redirect::to('Frase')->withSuccess('Perfecto! Registro Actualizado Correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Frase  $frase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frase $frase)
    {
        //
    }
}
