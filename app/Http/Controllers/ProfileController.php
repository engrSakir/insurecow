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
    public function update(Request $request,Profile $profile)
    {

        $inputs = \request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'website'   => 'required',
            'about'   => 'required',
            'image'     => 'mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }else {
            $inputs['image'] = $profile->image;
        }

        $profile->update([
            'website' => $inputs['website'],
            'about' => $inputs['about'],
            'image' => $inputs['image'],
        ]);

        $user_data = $profile->user_id;

        User::findOrFail($user_data)->update([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
        ]);

        return redirect()->route('superadmin.index');
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
    function company(){
        return view('company.profile');
        
    }
}
