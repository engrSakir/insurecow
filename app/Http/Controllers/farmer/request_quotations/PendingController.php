<?php

namespace App\Http\Controllers\farmer\request_quotations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Pending;
use App\Package;

class PendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($request->additionalcoverages) {
            foreach ($request->additionalcoverages as $additionalcoverage) {
                if ($additionalcoverage == 'floodcyclonecoverage' || $additionalcoverage == 'earthquakecoverage') {
                    
                }else {
                    return redirect()->back();
                }
            }
        }
        
        $request->validate([
            'cattle_id' => 'required|integer',
            'buying_price' => 'required|numeric',
            'insurance_period' => 'required|numeric',
            'accidental_mortality'=> 'required|string',
        ]);
        
        if ($request->buying_price <= 1000000 && $request->buying_price >= 10000 && $request->insurance_period <= 5 && $request->insurance_period >= 1 && $request->insurance_period <= 5 && $request->accidental_mortality == 'accidental_diseases_mortality') {

            $data = [
                'cattle_id' => $request->cattle_id,
                'user_id' => Auth::user()->id,
                'buying_price' => $request->buying_price,
                'insurance_period' => $request->insurance_period,
                'accidental_mortality'=> $request->accidental_mortality,
                'additionalcoverages' => json_encode($request->additionalcoverages)
            ];
            
            $pakages = Package::where('insurance_period', 'LIKE', '%'.$request->insurance_period.'%')
                                ->where('coverage', 'LIKE', '%'.$request->accidental_mortality.'%')
                                ->get();
    
            return view('farmer.onboard.insurance_results', compact('data', 'pakages'));
        }else {
            return redirect()->back()->with('buying_price', 'Check your buying price Or insurance period number range Or Coverages/Additional Coverages.');
        }
     
    }

    public function saveInsurance(Request $request)
    {
        $request->validate([
            'cattle_id' => 'required|integer',
            'buying_price' => 'required|numeric',
            'insurance_period' => 'required|numeric',
            'accidental_mortality'=> 'required|string',
        ]);

        $pending = Pending::where('cattle_id', '=', $request->cattle_id)
                            ->where('user_id', '=', $request->user_id)
                            ->first();
        if ($pending === null) {
            Pending::create($request->all());
            return redirect()->route('onboard.index')->with('not', 'Your information has been saved.');
        }else {
            return redirect()->back()->with('nothing', 'This cattle has already been registered for insurance.');
        }    
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
}
