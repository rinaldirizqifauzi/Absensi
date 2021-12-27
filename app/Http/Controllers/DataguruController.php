<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataguru;

class DataguruController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:Data Show', ['only' => 'index']);
    }

    public function index()
    {
        return view ('dataguru.index');
    }
}
