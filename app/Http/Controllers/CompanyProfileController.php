<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\User;
class CompanyProfileController extends Controller
{
    public function index()
    {
        return view('company.profile');
    }

    public function store(Request $request)
    {

        // return $request->all();

        $inputs = [
            'website'   => 'required',
            'address'=>'required',
            'about'   => 'required',
            'image'     => 'required|mimes:jpeg,jpg,png',
        ];

        $this->validate($request,$inputs);
        $company=new Company();
        $company->website=$request->website;
        $company->address=$request->address;
        $company->about=$request->about;


        $company['user_id'] = auth()->user()->id;

        if (request('image')) {
            $company['image'] = \request('image')->store('images');
        }


        $company->save();
        return redirect()->route('company.index');
    }

    public function edit($id)
    {

        $profile = Company::where('user_id',$id)->orderBy('id','desc')->first();
        return view('superadmin.edit', compact('profile'));

    }

    public function update(Request $request,Company $profile)
    {

        $inputs = \request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'website'   => 'required',
            'about'   => 'required',
            'address'   => 'required',

            'image'     => 'mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }else {
            $inputs['image'] = $profile->image;
        }

        $profile->update([
            'website' => $inputs['website'],
            'address' => $inputs['address'],

            'about' => $inputs['about'],

            'image' => $inputs['image'],
        ]);

        $user_data = $profile->user_id;

        User::findOrFail($user_data)->update([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
        ]);

        return redirect()->route('company.index');
    }
}
