<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class CompanyPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.package');
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
        $inputs=[
            'name'=>'required',
            'price_range'=>'required',
            'insurance_period'=>'required',
            'coverage'=>'required',
            'premium_amount'=>'required',
            'lowest'=>'required',
            'highest'=>'required',


        ];
        $this->validate($request,$inputs);
        $package=new Package();
        $package->name=$request->name;
        $package->price_range=$request->price_range;
        $package->insurance_period=$request->insurance_period;
        $package->coverage=$request->coverage;
        $package->premium_amount=$request->premium_amount;
        $package->lowest=$request->lowest;
        $package->highest=$request->highest;


        $package['user_id'] = auth()->user()->id;
        $package->save();
        return redirect()->back()->with('pkg','Package added successfully');

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
