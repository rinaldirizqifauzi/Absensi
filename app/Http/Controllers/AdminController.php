<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function kegiatan()
    {
        $datakegiatan = Kegiatan::all();
        return view('admin.kegiatan.index', compact('datakegiatan'));
    }
}
