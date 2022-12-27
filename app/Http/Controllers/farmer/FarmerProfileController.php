<?php

namespace App\Http\Controllers\farmer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Profile;
use App\User;


class FarmerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('farmer.profile.profile');
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
        $inputs = [
            'website'   => 'required',
            'about'   => 'required',
            'image'     => 'required|mimes:jpeg,jpg,png',
        ];
        $this->validate($request,$inputs);

        $inputs['user_id'] = auth()->user()->id;

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }


        Profile::create($inputs);
        return redirect()->route('farmer.index');
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
        return view('farmer.edit', compact('profile'));
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
        $inputs = \request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'website'   => 'required',
            'about'   => 'required',
            'image'     => 'mimes:jpeg,jpg,png',
        ]);
        $profile = Profile::findOrFail($id);
        $profile->update([
            'website'   => $inputs['website'],
            'about'     => $inputs['about'],
            'image'     => $inputs['image'],
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }else {
            $inputs['image'] = $profile->image;
        }

        $user_data = $profile->user_id;

        User::findOrFail($user_data)->update([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
        ]);

        return redirect()->route('farmer.index');
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
