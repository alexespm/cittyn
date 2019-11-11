<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
USE Validator,Redirect;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $Banner = Banner::all();
    //     //return dd($Banner);       
    //     return view('index',compact('Banner'));
    // }

    public function index()
    {
        $Banner = Banner::all();      
        //return $Banner;
        return view('VistaBanner',compact('Banner'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Banner= Banner::findOrFail($id);
        return view('home')->with('Banner',$Banner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Banner = Banner::where('id',  '=', $id)->first();
       return view('admin.main_banner', compact('Banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Banner = Banner::findOrFail($id);
        
        $file = $request->file('imagen');
        $validator = Validator::make ($request->all(), [ 'imagen' => 'max:5120']);  
        if($file === NULL)
        {
            $file =  $Banner->imagen;
            $Banner->imagen  = $file;
        }
        else{
            request()->validate([
                'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('images')->put($nombre,  \File::get($file));
            $Banner->imagen = $nombre;
        }
        
        $Banner->titH1 = $request->titulo;
        $Banner->title = $request->contenido;
        
        $Banner->save();
        //return redirect()->route('Banner.index')->with('datos','Registro Actualizado Correctamente');
        return Redirect::to('Banner')->withSuccess('Perfecto! Registro Actualizado Correctamente.');

        //return'Registro actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Respon se
     */
    public function destroy($id)
    {
    }
}
