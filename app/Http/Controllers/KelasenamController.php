<?php

namespace App\Http\Controllers;

use App\Models\KelasVI;
use Illuminate\Http\Request;

class KelasenamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelas.kelas6.index');
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
     * @param  \App\Models\KelasVI  $kelasVI
     * @return \Illuminate\Http\Response
     */
    public function show(KelasVI $kelasVI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelasVI  $kelasVI
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasVI $kelasVI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelasVI  $kelasVI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasVI $kelasVI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelasVI  $kelasVI
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasVI $kelasVI)
    {
        //
    }
}
