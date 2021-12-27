<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jadwalinfoController extends Controller
{
    public function index(){
        return view('penjadwalan.index');
    }
}
