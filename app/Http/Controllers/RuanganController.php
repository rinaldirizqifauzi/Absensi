<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function kelas()
    {
        return view('ruangan.index');
    }
}
