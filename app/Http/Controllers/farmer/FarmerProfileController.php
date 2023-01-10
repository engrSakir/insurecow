<?php

namespace App\Http\Controllers\farmer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\FarmerProfile;
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
        if (FarmerProfile::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first() == null) {
            return view('farmer.profile.profile');
        } else {
            $profile = FarmerProfile::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();

            return redirect()->route('farmerprofiles.edit', $profile->user_id);
        }
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
        ];
        $this->validate($request,$inputs);

        $farmer_profile = new FarmerProfile();
        $farmer_profile->first_name = $request->first_name;
        $farmer_profile->last_name = $request->last_name;
        $farmer_profile->email = $request->email;
        $farmer_profile->phone = $request->phone;
        $farmer_profile->address = $request->address;
        $farmer_profile->city = $request->city;
        $farmer_profile->district = $request->district;
        $farmer_profile->zip_code = $request->zip_code;
        $farmer_profile->country = $request->country;
        $farmer_profile->user_id = auth()->user()->id;

        if (request('image')) {
            $farmer_profile['image'] = \request('image')->store('images');
        }

        $farmer_profile->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = FarmerProfile::where('user_id', $id)->orderBy('id', 'desc')->firstOrfail();
        return view('farmer.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs=[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
        ];
        $this->validate($request,$inputs);
        $farmer_profile = FarmerProfile::find($id);
        $farmer_profile->first_name = $request->first_name;
        $farmer_profile->last_name = $request->last_name;
        $farmer_profile->email = $request->email;
        $farmer_profile->phone = $request->phone;
        $farmer_profile->address = $request->address;
        $farmer_profile->city = $request->city;
        $farmer_profile->district = $request->district;
        $farmer_profile->zip_code = $request->zip_code;
        $farmer_profile->country = $request->country;
        $farmer_profile->user_id = auth()->user()->id;

        if (request('image')) {
            $farmer_profile->image = \request('image')->store('images');
        } else {
            $farmer_profile->image = $farmer_profile->image;
        }

        $farmer_profile->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
