<?php

namespace App\Http\Controllers\farmer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Farmer_reg_2;
use App\Package;  
use App\Company;  
use App\Pending;  
use App\User;  

class FarmerOnboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cattle = Farmer_reg_2::where('user_id', Auth::user()->id)->get();
        return view('farmer.onboard.index', compact('cattle'));
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
        // return $request->all();
        return view('farmer.onboard.insurance_results');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // return $request->all();
        $cattle_id = $request->cattle_id;
        $buying_price = $request->buying_price;
        $insurance_period = $request->insurance_period;
        $accidental_mortality = $request->accidental_mortality;
        $additionalcoverages = $request->additionalcoverages;

        $pakage = Package::findOrFail($id);
        $company = Company::where('user_id', $pakage->user_id)->first();
        $user = User::where('id', $company->user_id)->first();
        return view('farmer.onboard.insurance_details', compact('pakage', 
        'company', 
        'user', 
        'cattle_id', 
        'buying_price', 
        'insurance_period', 
        'accidental_mortality', 
        'additionalcoverages'));
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

    public function single($id)
    {
        $cattle = Farmer_reg_2::findOrFail($id);
        $pending = Pending::where('cattle_id', $id)->first();
        if (!$pending) {
            return view('farmer.onboard.insurance-cattle', compact('cattle'));
        }
        return redirect()->back()->with('pending', 'This cattle already has a Insurance.');
    }
}
