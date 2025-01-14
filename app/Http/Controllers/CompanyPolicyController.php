<?php

namespace App\Http\Controllers;

use App\Policy;
use Illuminate\Http\Request;

class CompanyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Policy::where('user_id',auth()->user()->id)->orderBy('id','desc')->first() == null){
//            return redirect()->route('quotation.index');
            return  view('company.policy');
        }else{
            $policy = Policy::where('user_id',auth()->user()->id)->orderBy('id','desc')->first();
            return redirect()->route('policy.edit',$policy);
//            return view('company.edit_quotation',compact('quotation'));

        }
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $inputs = \request()->validate([

            'policy' => "required|mimes:pdf|max:10000",
        ]);

        if (request('policy')) {
            $inputs['policy'] = \request('policy')->store('pdf');
        }


        $inputs['user_id'] = auth()->user()->id;


//        $policy= new Policy();
        Policy::where('user_id', auth()->user()->id)->create($inputs);
        return  redirect()->back();

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
        $policy = Policy::where('user_id',auth()->user()->id)->orderBy('id','desc')->first();
        return view('company.edit_policy', compact('policy'));
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
        $inputs = [


            'policy' => "required|mimes:pdf|max:10000",

        ];



        $this->validate($request,$inputs);

        $policy=Policy::find($id);






        if (request('policy')) {
            $policy['policy'] = \request('policy')->store('pdf');
        }else {
            $policy['policy'] = $policy->policy;
        }






        $policy->save();
        return redirect()->route('company.index')->with('alt','Profile Edit successful');
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
