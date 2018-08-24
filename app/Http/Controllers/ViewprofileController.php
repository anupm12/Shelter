<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Owner;

class ViewprofileController extends Controller
{
    public function index($id)
    {
        return view('viewprofile')->with('profile',User::find($id))->with('owners',Owner::find($id));
    }

    // public function viewadd($id)
    // {
    //     return view('viewadd')->with('viewadd' ,Owner ::find($id)) ;
    // }
}
