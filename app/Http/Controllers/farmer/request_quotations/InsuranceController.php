<?php

namespace App\Http\Controllers\farmer\request_quotations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Pending;

class InsuranceController extends Controller
{
    public function saveInsurance (Request $request)
    {

        // return $request->all();
        $request->validate([
            'cattle_id' => 'required|integer',
            'buying_price' => 'required|numeric',
            'insurance_period' => 'required|numeric',
            'accidental_mortality'=> 'required|string',
            'company_id' => 'required',
            'user_id' => 'required'
        ]);

        $pending = Pending::where('cattle_id', '=', $request->cattle_id)
                        ->where('buying_price', '=', $request->buying_price)
                        ->where('insurance_period', '=', $request->insurance_period)
                        ->where('accidental_mortality', '=', $request->accidental_mortality)
                        ->where('company_id', '=', $request->company_id)
                        ->where('user_id', '=', $request->user_id)
                        ->first();

        if (!$pending) {
            Pending::create($request->all());
            return redirect()->route('onboard.index')->with('not', 'Your information has been saved.');
        }else {
            return redirect()->route('onboard.index')->with('nothing', 'This cattle has already been registered for insurance.');
        }    
    }
}
