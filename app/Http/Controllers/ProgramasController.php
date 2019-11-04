<?php

namespace App\Http\Controllers;

use App\Programas;
use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Programas = Programas::all();
        //return $programas;      
        return view('VistaProgramas',compact('Programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createprograms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Programas = new Programas;
        $file = $request->file('imagen');
        
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        return $nombre;
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        $Programas->titulo = $request->titulo;
        $Programas->contenido = $request->contenido;
        $Programas->fondo = $nombre;
        $Programas->color = $request->color;
        $Programas->save();
       
        return back()->with('datos','Registro guardado correctamente');
        //return redirect()->route('Programas')->with('datos','Registro guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function show(Programas $programas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Programas= Programas::findOrFail($id);
        return view('admin.programas',compact('Programas'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Programas = Programas::findOrFail($id);
        $file = $request->file('imagen');
       
       if(empty($file)){
            return $request->fondo;
        }
        else
        { 
            return $request->fondo;
        }


        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        $Programas->titulo = $request->titulo;
        $Programas->contenido = $request->contenido;
        $Programas->fondo = $nombre;
        $Programas->color = $request->color;
        $Programas->save();
        return'Registro actualizado';
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Programas = programas::findOrFail($id);
        $Programas->delete();
        return back();
    }
    
}
