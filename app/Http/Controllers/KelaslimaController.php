<?php

namespace App\Http\Controllers;

use App\Models\KelasV;
use Illuminate\Http\Request;

class KelaslimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelas.kelas5.index');
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
     * @param  \App\Models\KelasV  $kelasV
     * @return \Illuminate\Http\Response
     */
    public function show(KelasV $kelasV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelasV  $kelasV
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasV $kelasV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelasV  $kelasV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasV $kelasV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelasV  $kelasV
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasV $kelasV)
    {
        //
    }
}
