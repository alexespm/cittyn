<?php

namespace App\Http\Controllers;

use App\Cittyn;
Use App\Banner;
use App\helper;
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
        $helepr = helper::all();      
        //return view('index',compact('Banner'));
        return view('home')->with('Banner',$Banner)->with('Helper',$Helper);
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
