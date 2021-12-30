<?php

namespace App\Http\Controllers;

use App\Models\KelasIII;
use Illuminate\Http\Request;

class KelastigaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelas.kelas3.index');
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
     * @param  \App\Models\KelasIII  $kelasIII
     * @return \Illuminate\Http\Response
     */
    public function show(KelasIII $kelasIII)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelasIII  $kelasIII
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasIII $kelasIII)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelasIII  $kelasIII
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasIII $kelasIII)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelasIII  $kelasIII
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasIII $kelasIII)
    {
        //
    }
}
