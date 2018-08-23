<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use File;
use App\Owner;


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
            //  'filename' => 'required',
            // 'filename.*' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
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
           


        //   if($request->hasfile('filename'))
        //   {
 
        //      foreach($request->file('filename') as $image)
        //      {
        //          $name=time().$image->getClientOriginalName();
        //          $image->move('uploads/owner', $name);  
        //          $data[] = $name;  
        //      }
        //   }
 
        //   $owner= new Owner();
        //   $owner->filename=json_encode($data);
          
         
        //  $owner->save();
 




            $image1 = $request->image1;
            $image1_new = time().$image1->getClientOriginalName();
            $image1->move('uploads/owner',$image1_new); //moving the file
            
            $image2 = $request->image2;
            $image2_new = time().$image2->getClientOriginalName();
            $image2->move('uploads/owner',$image2_new); //moving the file

        
            $image3 = $request->image3;
            $image3_new = time().$image3->getClientOriginalName();
            $image3->move('uploads/owner',$image3_new); //moving the file
    
            
            $owner = Owner::create([
                'image1' => 'uploads/owner/'.$image1_new,
                'image2' => 'uploads/owner/'.$image2_new,
               'image3' => 'uploads/owner/'.$image3_new,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'area' => $request->area,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
                'propertyname' => $request->propertyname,
                'rent' => $request->rent,
                'advance' => $request->advance,
                'type' => $request->type,
                'for' => $request->for,
                'description' => $request->description
              ]);


            // $owner=new Owner;
            // $owner ->  firstname = $request ->firstname; 
            // $owner ->  lastname = $request ->lastname; 
            // $owner -> save();


        //  Session::flash('success','Details updated successfully');
        // sreturn redirect()->route('welcome');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
