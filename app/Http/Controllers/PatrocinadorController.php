<?php

namespace App\Http\Controllers;

use App\patrocinador;
use Illuminate\Http\Request;
use Validator,Redirect;
class PatrocinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Patrocinador = patrocinador::all();      
        return view('VistaPatrocinador',compact('Patrocinador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createpatrocinadores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Patrocinador = new patrocinador;
        $file1 = $request->file('imagen1');
        $file2 = $request->file('imagen2');
        $file3 = $request->file('imagen3');
        request()->validate([
            'imagen1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //obtenemos el nombre del archivo
        $nombre1 = $file1->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('patrocinadores')->put($nombre1,  \File::get($file1));

        $nombre2 = $file2->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('patrocinadores')->put($nombre2,  \File::get($file2));

        $nombre3 = $file3->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('patrocinadores')->put($nombre3,  \File::get($file3));

       
        $Patrocinador->logo = $nombre1;
        $Patrocinador->contenido_patrocinador = $request->contenido;
        $Patrocinador->logo_patrocinador = $nombre2;
        $Patrocinador->background = $nombre3;
        $Patrocinador->color = $request->color;
        $Patrocinador->save();
         return redirect()->route('Patrocinador.index')->with('datos','Registro Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function show(patrocinador $patrocinador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Patrocinador = Patrocinador::findOrFail($id);
        return view('admin.patrocinadores',compact('Patrocinador')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Patrocinador = patrocinador::findOrFail($id);
        $file1 = $request->file('imagen1');
        $file2 = $request->file('imagen2');
        $file3 = $request->file('imagen3');
        if($file1 === NULL)
        {
            $file1 = $Patrocinador->logo;
            $Patrocinador->logo = $file1;            
        }
        else{
            request()->validate([
                'imagen1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //obtenemos el nombre del archivo
            $nombre1 = $file1->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('patrocinadores')->put($nombre1,  \File::get($file1));
            $Patrocinador->logo = $nombre1;
        }
        if($file2 === NULL)
        {
            $file2 = $Patrocinador->logo_patrocinador;
            $Patrocinador->logo_patrocinador = $file2;
        }
        else{
            request()->validate([
                'imagen2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //obtenemos el nombre del archivo
            $nombre2 = $file2->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('patrocinadores')->put($nombre2,  \File::get($file2));
            $Patrocinador->logo_patrocinador = $nombre2;
        }
        if($file3 === NULL)
        {
            $file3 = $Patrocinador->background;
            $Patrocinador->background = $file3;
        }
        else{
            request()->validate([
                'imagen3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //obtenemos el nombre del archivo
            $nombre3 = $file3->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('patrocinadores')->put($nombre3,  \File::get($file3));            
            $Patrocinador->background = $nombre3;
        }
        $Patrocinador->color = $request->color;
        $Patrocinador->contenido_patrocinador = $request->contenido;
        $Patrocinador->save();
        return Redirect::to('Patrocinadores')->withSuccess('Perfecto! Registro Actualizado Correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Patrocinador = patrocinador::findOrFail($id);
        $Patrocinador->delete();
        return redirect()->route('Patrocinador.index')->with('datos','Registro Eliminado Correctamente');
    }
}
