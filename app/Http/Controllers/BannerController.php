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
    public function index()
    {
        $Banner = Banner::all();
        //return dd($Banner);       
        return view('index',compact('Banner'));
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
    public function show(Banner $banner)
    {
        //
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
        $data = $request->input('image');
        $photo = $request->file('image')->getClientOriginalName();
        $destination = base_path() . '/public/uploads';
        $request->file('image')->move($destination, $photo);
        return dd($request);
        //$ruta = images::disk('public')
        // $image->move('images', $image->getClientOriginalName());
        // $Banner->imagen = $image->getClientOriginalName();
        // $Banner->titH1= $request->titH1;
        // $Banner->title= $request->title;
        // $Banner-save();
        
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
