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
        // return $request->all();
        $data = [
            'cattle_id' => $request->cattle_id,
            'user_id' => Auth::user()->id,
            'buying_price' => $request->buying_price,
            'insurance_period' => $request->insurance_period,
            'accidental_mortality'=> $request->accidental_mortality,
            'additionalcoverages' => json_encode($request->additionalcoverages)
        ];

        $pakages = Package::orWhere('coverage', $request->accidental_mortality)
                            ->orWhere('coverage', $request->additionalcoverages)
                            ->orWhere('insurance_period', $request->insurance_period)
                            ->orWhere('lowest', $request->buying_price)
                            ->orWhere('highest', $request->buying_price)
                            ->get();

        return view('farmer.onboard.insurance_results', compact('data', 'pakages'));
    }

    public function saveInsurance(Request $request)
    {
        Pending::create($request->all());
        return redirect()->route('onboard.index')->with('not', 'Your information has been saved.');
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
