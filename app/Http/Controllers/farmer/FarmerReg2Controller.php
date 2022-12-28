<?php

namespace App\Http\Controllers\farmer;

use App\Farmer_reg_2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FarmerReg2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('farmer.signup.reg_two');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farmer_reg_2  $farmer_reg_2
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer_reg_2 $farmer_reg_2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farmer_reg_2  $farmer_reg_2
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer_reg_2 $farmer_reg_2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farmer_reg_2  $farmer_reg_2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmer_reg_2 $farmer_reg_2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farmer_reg_2  $farmer_reg_2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmer_reg_2 $farmer_reg_2)
    {
        //
    }
}
