<?php

namespace App\Http\Controllers;

use App\Cittyn;
Use App\Banner;
use App\helper;
use App\QuienesSomos;
use App\Frase;
use App\Programas;
use App\patrocinador;
use App\Aliados;
use Illuminate\Http\Request;

class CittynController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Banner = Banner::all();
        $Helper = helper::all();  
        $QuienesSomos = Quienessomos::all();   
        $Frase = Frase::all(); 
        $Programas = Programas::all(); 
        $Patrocinadores = patrocinador::all();   
        $Aliados = Aliados::all();   
        //return view('index',compact('Banner,Helper'));
        return view('index')->with('Banner',$Banner)->with('Helper',$Helper)->with('QuienesSomos',$QuienesSomos)->with('Frase',$Frase)->with('Programas',$Programas)->with('Patrocinadores',$Patrocinadores)->with('Aliados',$Aliados);
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
     * @param  \App\Cittyn  $cittyn
     * @return \Illuminate\Http\Response
     */
    public function show(Cittyn $cittyn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cittyn  $cittyn
     * @return \Illuminate\Http\Response
     */
    public function edit(Cittyn $cittyn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cittyn  $cittyn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cittyn $cittyn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cittyn  $cittyn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cittyn $cittyn)
    {
        //
    }
}
