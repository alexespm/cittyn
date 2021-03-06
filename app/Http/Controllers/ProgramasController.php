<?php

namespace App\Http\Controllers;

use App\Programas;
use Illuminate\Http\Request;
use Validator,Redirect;
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
        request()->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:50000',
        ]);
        $file = $request->file('imagen');
        
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        $Programas->titulo = $request->titulo;
        $Programas->contenido = $request->contenido;
        $Programas->fondo = $nombre;
        $Programas->color = $request->color;
        $Programas->save();
        return Redirect::to('Programas')->withSuccess('Perfecto! Programa creado exitosamente.');
       
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
        if($file === NULL)
        {
            // En caso de que el hecho de subir una imagen sea opcional, si el usuario no sube ninguna, usamos la imagen por defecto
            $file =  $Programas->fondo;
            $Programas->fondo  = $file;
        }
        else
        {
            request()->validate([
                'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            // yo siempre encripto el nombre de la imagen, esto es opcional
            //$name = md5($image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();;
            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombre,  \File::get($file));
            $Programas->fondo  = $nombre;
        }
        $Programas->titulo = $request->titulo;
        $Programas->contenido = $request->contenido;
        $Programas->color = $request->color;
      
        $Programas->save();
        //return redirect()->route('Programas.index')->with('datos','Registro Actualizado Correctamente');
        return Redirect::to('Programas')->withSuccess('Perfecto! Registro Actualizado Correctamente.');
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
        return redirect()->route('Programas.index')->with('datos','Registro Eliminado Correctamente');
    }
    
}
