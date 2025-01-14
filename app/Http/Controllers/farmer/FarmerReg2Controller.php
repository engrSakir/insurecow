<?php

namespace App\Http\Controllers\farmer;

use App\Farmer_reg_2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $process = new Process(['python', app_path('Python/example.py')]);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $request['perceptual_similarity'] = (int)$process->getOutput();

        $inputs = \request()->validate([
            'farmname' => 'required',
            'farmername' => 'required',
            'division' => 'required',
            'district' => 'required',
            'thana' => 'required',
            'post' => 'required',
            'nid' => 'required|regex:/^([0-9]+)$/',
            'contact' => 'required',
            'cattle_name' => 'required',
            'cattle_color' => 'required',
            'cattle_breed' => 'required',
            'age' => 'required',
            'weight' => 'required|regex:/^([0-9]+)$/|not_in:0',
            'gender' => 'required',

            'face_of_cow' => 'required',
            'left_side' => 'required',
            'right_side' => 'required',
            'cow_with_owner' => 'required',
            'price' => 'required|regex:/^([0-9]+)$/|not_in:0',

            'agent_employee_id' => 'nullable',
            'agent_name' => 'nullable',
            'perceptual_similarity' => 'required|numeric|max:5'
        ]);


        if (request('face_of_cow')) {
            $inputs['face_of_cow'] = \request('face_of_cow')->store('images');
        }

        if (request('left_side')) {
            $inputs['left_side'] = \request('left_side')->store('images');
        }

        if (request('right_side')) {
            $inputs['right_side'] = \request('right_side')->store('images');
        }

        if (request('special_mark')) {
            $inputs['special_mark'] = \request('special_mark')->store('images');
        }

        if (request('cow_with_owner')) {
            $inputs['cow_with_owner'] = \request('cow_with_owner')->store('images');
        }

        $inputs['user_id'] = Auth::user()->id;
        $inputs['cattle_unique_id'] = uniqid();

        Farmer_reg_2::create($inputs);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Farmer_reg_2 $farmer_reg_2
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer_reg_2 $farmer_reg_2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Farmer_reg_2 $farmer_reg_2
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer_reg_2 $farmer_reg_2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Farmer_reg_2 $farmer_reg_2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmer_reg_2 $farmer_reg_2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Farmer_reg_2 $farmer_reg_2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmer_reg_2 $farmer_reg_2)
    {
        //
    }
}
