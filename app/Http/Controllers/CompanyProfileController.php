<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\User;

class CompanyProfileController extends Controller
{
    public function index()
    {
        if (Company::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first() == null) {
//            return redirect()->route('profile.index');
            return  view('company.profile');
        } else {
            $company = Company::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();
            return redirect()->route('profile.edit',$company);
        }
    }

    public function store(Request $request)
    {

//         return $request->all();

        $inputs = [
            'website' => 'required|url',
            'address' => 'required',
            'about' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ];

        $this->validate($request, $inputs);
        $company = new Company();
        $company->website = $request->website;
        $company->address = $request->address;
        $company->about = $request->about;


        $company['user_id'] = auth()->user()->id;

        if (request('image')) {
            $company['image'] = \request('image')->store('images');
        }


        $company->save();
        // return redirect()->back();

        return redirect()->route('company.index')->with('alrt', 'Profile Set Successfull');
    }

    public function edit(Request $request, $id)
    {

        $company = Company::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();
        return view('company.edit', compact('company'));

    }

    public function update(Request $request, $id)
    {


        $inputs = [


            'website' => 'required|url',
            'about' => 'required',
            'address' => 'required',



        ];


        $this->validate($request, $inputs);

        $company = Company::find($id);


        $company->website = $request->website;
        $company->about = $request->about;
        $company->address = $request->address;


        if (request('image')) {
            $company['image'] = \request('image')->store('images');
        } else {
            $company['image'] = $company->image;
        }
        $company->save();
        $user_data = $company->user_id;

        $user = User::findOrFail($user_data);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('company.index')->with('alt', 'Profile Edit successful');


    }
}
