<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use File;
use Auth;
use App\User;
use App\owner;
use App\welcome;


class OwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('owner.owner');
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
        //  dd($request->all());



         $this->validate($request, [
            'image1' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'image2' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'image3' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'firstname' => 'required|max:30|min:2',
            'lastname' => 'required|max:30|min:2',
            'address1' => 'required|max:225',
            'address2' => 'required|max:225',
            'area' => 'required|max:20',
            'city' => 'required|max:30',
            'state' => 'required|max:225',
            'zip' => 'max:10',
            'propertyname' => 'required|max:225|min:10',
            'rent' => 'required|max:5',
            'advance' => 'required|max:5',
            'type' => 'required|max:25',
            'for' => 'required|max:25',
            'description' => 'max:225'
          ]);


            $image1 = $request->image1;
            $image1_new = time().$image1->getClientOriginalName();
            $image1->move('uploads/owner',$image1_new); //moving the file

            $image2 = $request->image2;
            $image2_new = time().$image2->getClientOriginalName();
            $image2->move('uploads/owner',$image2_new); //moving the file


            $image3 = $request->image3;
            $image3_new = time().$image3->getClientOriginalName();
            $image3->move('uploads/owner',$image3_new); //moving the file

            $city  = explode(',' ,$request->city);
            $state = explode(',',$request->state);

            $user = Auth::user();

            $owner = Owner::create([
                'user_id' => $user->id,
                'image1' => 'uploads/owner/'.$image1_new,
                'image2' => 'uploads/owner/'.$image2_new,
                'image3' => 'uploads/owner/'.$image3_new,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'area' => $request->area,
                'city' => $city[0],
                'state' => $state[0],
                'zip' => $request->zip,
                'propertyname' => $request->propertyname,
                'rent' => $request->rent,
                'advance' => $request->advance,
                'type' => $request->type,
                'for' => $request->for,
                'description' => $request->description,
                'isowner'=>true
              ]);


              $id = $user->id;
              $owner = Owner::find($id);
              $user->isowner = $owner->isowner;
              $user->save();


              Session::flash('success','Advertisement AddedSuccessfully ');
              return redirect()->route('welcome');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('editadvertisement')->with('owner',Owner::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'firstname'=>'required|max:255',
            'lastname'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'area'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'propertyname'=>'required',
            'rent'=>'required',
            'advance'=>'required',
            'type'=>'required',
            'for'=>'required',
            'description'=>'required'
        ]);

         $owner = Owner::find($id);

         if($request->hasfile('image1')){
            $image1 = $request->image1;
            $image1_new = time().$image1->getClientOriginalName();
            $image1->move('uploads/owner',$image1_new);
            $owner->image1 = 'uploads/owner'.$image1_new;
        }

        if($request->hasfile('image2')){
        $image2 = $request->image2;
        $image2_new = time().$image2->getClientOriginalName();
        $image2->move('uploads/owner',$image2_new); //moving the file
        $owner->image2 = 'uploads/owner'.$image2_new;
        }

        if($request->hasfile('image3')){
        $image3 = $request->image3;
        $image3_new = time().$image3->getClientOriginalName();
        $image3->move('uploads/owner',$image3_new); //moving the file
        $owner->image3 = 'uploads/owner'.$image3_new;
        }

         $owner->firstname = $request->firstname;
         $owner->lastname = $request->lastname;
         $owner->address1 = $request->address1;
         $owner->address2 = $request->address2;
         $owner->area = $request->area;
         $owner->city = $request->city;
         $owner->state = $request->state;
         $owner->zip = $request->zip;
         $owner->propertyname = $request->propertyname;
         $owner->rent = $request->rent;
         $owner->advance = $request->advance;
         $owner->type = $request->type;
         $owner->for = $request->for;
         $owner->description = $request->description;
         $owner->save();
        Session::flash('success','Advertisement Updated');
         return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner = Owner::find($id);
        $owner->delete();
        Session::flash('success','Advertisement Deleted');
        return redirect()->back();
    }
}
