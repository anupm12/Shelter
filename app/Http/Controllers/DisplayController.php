<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Owner;
use App\single;

class DisplayController extends Controller
{

    public function welcome(){
        return view('welcome');
    }

    public function index()
    {
        return view('index')->with('owners' ,Owner ::all()) ;
    }

    public function single($id)
    {
        
        return view('single')->with('single' ,Owner ::find($id));
    }
        
    public function results(){

        $type = request('type');
        $for  = request('for');

        $owners = Owner::where('city','like','%'.request('query').'%')
                         ->Where('type','like','%'.$type.'%')
                         ->Where('for','like','%'.$for.'%')->get();


        return view('results')->with('owners',$owners);

    }

}
