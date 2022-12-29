<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "test";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inputs = [
            'website'   => 'required',
            'about'   => 'required',
            'image'     => 'required|mimes:jpeg,jpg,png',
        ];
        $this->validate($request,$inputs);
        $admin=new Profile();
        $admin->website=$request->website;
        
        $admin->about=$request->about;

        $admin['user_id'] = auth()->user()->id;

        if (request('image')) {
            $admin['image'] = \request('image')->store('images');
        }


        $admin->save();
       
        return redirect()->route('superadmin.index');
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
        // $profile=Profile::find($id);

        $profile = Profile::where('user_id',$id)->orderBy('id','desc')->first();
        return view('superadmin.edit', compact('profile'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $inputs = [
            
            'website'   => 'required',
            'about'   => 'required',
            
        ];
        $this->validate($request,$inputs);

        $profile=Profile::find($id);
        $profile->website=$request->website;
        $profile->about=$request->about;
        
        
        if (request('image')) {
            $profile['image'] = \request('image')->store('images');
        }else {
            $profile['image'] = $request->image;
        }
        $profile->save();
        return redirect()->route('superadmin.index');



        // $profile['user_id'] = auth()->user()->id;
        // $profile->update([
        //     'website' => $inputs['website'],
        //     'about' => $inputs['about'],
        //     'image' => $inputs['image'],
        // ]);

        // $user_data = $request->user_id;

        // User::findOrFail($user_data)->update([
        //     'name' => $inputs['name'],
        //     'email' => $inputs['email'],
        // ]);
        
       
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
