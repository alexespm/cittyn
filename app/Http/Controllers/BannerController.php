<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

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
        //
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

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('images')->put($nombre,  \File::get($file));
        $Banner->titH1 = $request->titulo;
        $Banner->title = $request->contenido;
        $Banner->imagen = $nombre;
        $Banner->save();
        return redirect()->route('Banner.index')->with('datos','Registro Actualizado Correctamente');
        //return redirect()->route('home');

        //return'Registro actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
