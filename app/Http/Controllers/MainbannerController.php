<?php

namespace App\Http\Controllers;

use App\mainbanner;
use Illuminate\Http\Request;

class MainbannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = mainbanner::all();
        //return dd($mensajes);
        //return view('home');
        //return view('mensajes.index', compact('mensajes'));
        $columns = \DB::connection()->getSchemaBuilder()->getColumnListing("mainbanners");
        //return dd($columns);
        return view('home')->with('mensajes',$mensajes);
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
     * @param  \App\mainbanner  $mainbanner
     * @return \Illuminate\Http\Response
     */
    public function show(mainbanner $mainbanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mainbanner  $mainbanner
     * @return \Illuminate\Http\Response
     */
    public function edit(mainbanner $mainbanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mainbanner  $mainbanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mainbanner $mainbanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mainbanner  $mainbanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(mainbanner $mainbanner)
    {
        //
    }
}
