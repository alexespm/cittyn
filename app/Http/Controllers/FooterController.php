<?php

namespace App\Http\Controllers;

use App\footer;
use Illuminate\Http\Request;
use Validator,Redirect;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Footer= footer::all();  
        return view('VistaFooter',compact('Footer'));
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
     * @param  \App\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Footer = footer::where('id',  '=', $id)->first();
        return view('admin.footer', compact('Footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Footer = footer::findOrFail($id);
        $Footer->CU = $request->cu;
        $Footer->direccion = $request->direccion;
        $Footer->telefono = $request->telefono;
        $Footer->imagen1 = $request->imagen1;
        $Footer->imagen2 = $request->imagen2;
        $Footer->save();
        return Redirect::to('Footer')->withSuccess('Perfecto! Registro Actualizado Correctamente.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(footer $footer)
    {
        //
    }
}
