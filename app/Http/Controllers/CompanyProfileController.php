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

        $inputs = [
            'website'   => 'required',
            'address'=>'required',
            'about'   => 'required',
            'image'     => 'required|mimes:jpeg,jpg,png',
        ];
        $this->validate($request,$inputs);

        $inputs['user_id'] = auth()->user()->id;

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }


        // Company::create($inputs);
        return redirect()->route('company.index');
    }
}
