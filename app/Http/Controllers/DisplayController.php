<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Owner;
use App\single;
use App\Charge2;
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

    public function results(Request $request){

        $cookie = \Cookie::forget('for');

        // $cookie1 = Cookie::forget('bhk');
        $type = request('type');

        // dd(request('for'),request('for'));
            $owners = Owner::where('city','like','%'.request('query').'%')
                            ->Where('type','like','%'.$type.'%')
                            ->Where('for','like','%'.request('for').'%')->get();



        $request->session()->flash('country', $request->country);

        // if ($request->has('bhk')){
        //     $owners = Owner::where('city','like','%'.request('query').'%')
        //                     ->Where('type','like','%'.$type.'%')
        //                     ->Where('for','like','%'.request('for').'%')->get();
        // }


        return view('results')->with('owners',$owners)->withCookie($cookie);;

    }
    public function billing(Request $request,$id){
        $billing = Charge2::where('o_id',$id)->get();

        return view('billing')->with('billing',$billing);
    }

}
