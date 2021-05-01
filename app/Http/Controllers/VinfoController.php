<?php

namespace App\Http\Controllers;

use App\Models\Vinfo;
use Illuminate\Http\Request;

class VinfoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinfos = Vinfo::all();
        return  view('vinfo.index')->with('vinfos',$vinfos);
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
     * @param  \App\Models\Vinfo  $vinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Vinfo $vinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vinfo  $vinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vinfo $vinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vinfo  $vinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vinfo $vinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vinfo  $vinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vinfo $vinfo)
    {
        //
    }
}
