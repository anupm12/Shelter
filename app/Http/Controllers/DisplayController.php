<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Owner;

class DisplayController extends Controller
{
    public function index()
    {
        return view('index')->with('owners' ,Owner ::all()) ;
    }
}
