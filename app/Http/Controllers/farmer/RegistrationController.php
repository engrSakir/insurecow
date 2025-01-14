<?php

namespace App\Http\Controllers\farmer;

use App\Farmer_reg_1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('farmer.signup.reg_one');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('farmer.signup.reg_two');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'nid_front' => 'required',
            'nid_back' => 'required',
        ]);

        if (request('nid_front')) {
            $inputs['nid_front'] = \request('nid_front')->store('images');
        }

        if (request('nid_back')) {
            $inputs['nid_back'] = \request('nid_back')->store('images');
        }

        if (request('chairman')) {
            $inputs['chairman'] = \request('chairman')->store('images');
        }

        $inputs['user_id'] = auth()->user()->id;

        Farmer_reg_1::create($inputs);

        return redirect()->route("reg_two.index");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
