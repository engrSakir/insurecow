<?php

namespace App\Http\Controllers\farmer\request_quotations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Pending;

class InsuranceController extends Controller
{
    public function saveInsurance (Request $request)
    {
        $request->validate([
            'cattle_id' => 'required|integer',
            'buying_price' => 'required|numeric',
            'insurance_period' => 'required|numeric',
            'accidental_mortality'=> 'required|string',
            'company_id' => 'required',
            'user_id' => 'required'
        ]);
        
        $pending = Pending::where('cattle_id', '=', $request->cattle_id)->first();

        if (!$pending) {
            Pending::create($request->all());
            return redirect()->route('onboard.index')->with('not', 'Your information has been saved.');
        }else {
            return redirect()->route('onboard.index')->with('nothing', 'This cattle has already been registered for insurance.');
        }    
    }
}
