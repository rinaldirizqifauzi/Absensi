<?php

namespace App\Http\Controllers;

use App\Models\KelasII;
use Illuminate\Http\Request;

class Kelasduacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelas.kelas2.index');
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
     * @param  \App\Models\KelasII  $kelasII
     * @return \Illuminate\Http\Response
     */
    public function show(KelasII $kelasII)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelasII  $kelasII
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasII $kelasII)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelasII  $kelasII
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasII $kelasII)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelasII  $kelasII
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasII $kelasII)
    {
        //
    }
}
