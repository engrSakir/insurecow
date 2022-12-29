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
        // return redirect()->back();

        return redirect()->route('company.index');
    }

    public function edit($id)
    {

        $company = Company::where('user_id',$id)->orderBy('id','desc')->first();
        return view('company.edit', compact('company'));

    }

    public function update(Request $request,$id)
    {

        $inputs = [
            
            'website'   => 'required',
            'about'   => 'required',
            'address'   => 'required',

            
        ];
        $this->validate($request,$inputs);

        $company=Company::find($id);
        $company->website=$request->website;
        $company->about=$request->about;
        $company->address=$request->address;


        if (request('image')) {
            $company['image'] = \request('image')->store('images');
        }else {
            $company['image'] = $request->image;
        }
        $company->save();
        return redirect()->route('company.index');


        // $company->update([
        //     'website' => $inputs['website'],
        //     'address' => $inputs['address'],

        //     'about' => $inputs['about'],

        //     'image' => $inputs['image'],
        // ]);

        // $user_data = $company->user_id;

        // User::findOrFail($user_data)->update([
        //     'name' => $inputs['name'],
        //     'email' => $inputs['email'],
        // ]);
        // return redirect()->back();

    }
}
