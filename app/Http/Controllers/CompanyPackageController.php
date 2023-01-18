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
        $show=Package::where('user_id',auth()->user()->id)->get();
        return  view('company.view_package',compact('show'));
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
        if ($request->price_range=='10,000 - 50,000 BDT'){
            $package->price_range='10,000 - 50,000 BDT';
        }elseif ($request->price_range=='50,001 - 1,00,000 BDT'){
            $package->price_range='50,001 - 1,00,000 BDT';
        }elseif ($request->price_range=='1,00,001 - 1,50,000 BDT'){
            $package->price_range='1,00,001 - 1,50,000 BDT';
        }elseif ($request->price_range=='1,50,001 - 2,00,000 BDT'){
            $package->price_range='1,50,001 - 2,00,000 BDT';
        }
        elseif ($request->price_range=='2,00,001 - 10,00,000 BDT'){
            $package->price_range='2,00,001 - 10,00,000 BDT';
        }else{
            abort(404);
        }
        if ($request->insurance_period=='1 Year'){
            $package->insurance_period='1';
        } elseif ($request->insurance_period=='2 Year'){
            $package->insurance_period='2';
        }
        elseif ($request->insurance_period=='3 Year'){
            $package->insurance_period='3';
        }
        elseif ($request->insurance_period=='4 Year'){
            $package->insurance_period='4';
        }
        elseif ($request->insurance_period=='5 Year'){
            $package->insurance_period='5';
        }else{
            abort(404);
        }
        if ($request->coverage=='Accidental/Diseases Mortality'){
            $package->coverage='accidental_diseases_mortality';
        }elseif($request->coverage=='Flood Cyclone Coverage'){
            $package->coverage='flood_cyclone_coverage';
        }elseif($request->coverage=='Earthquake Coverage'){
            $package->coverage='earthquake_coverage';
        }else{
            abort(404);
        }
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
        $package= Package::where('user_id',auth()->user()->id)->orderBy('id','desc')->first();
        return view('company.package_edit',compact('package'));
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
        $package=Package::find($id);
        $package->name=$request->name;
        if ($request->price_range=='10,000 - 50,000 BDT'){
            $package->price_range='10,000 - 50,000 BDT';
        }elseif ($request->price_range=='50,001 - 1,00,000 BDT'){
            $package->price_range='50,001 - 1,00,000 BDT';
        }elseif ($request->price_range=='1,00,001 - 1,50,000 BDT'){
            $package->price_range='1,00,001 - 1,50,000 BDT';
        }elseif ($request->price_range=='1,50,001 - 2,00,000 BDT'){
            $package->price_range='1,50,001 - 2,00,000 BDT';
        }
        elseif ($request->price_range=='2,00,001 - 10,00,000 BDT'){
            $package->price_range='2,00,001 - 10,00,000 BDT';
        }else{
            abort(404);
        }
        if ($request->insurance_period=='1 Year'){
            $package->insurance_period='1';
        } elseif ($request->insurance_period=='2 Year'){
            $package->insurance_period='2';
        }
        elseif ($request->insurance_period=='3 Year'){
            $package->insurance_period='3';
        }
        elseif ($request->insurance_period=='4 Year'){
            $package->insurance_period='4';
        }
        elseif ($request->insurance_period=='5 Year'){
            $package->insurance_period='5';
        }else{
            abort(404);
        }
        if ($request->coverage=='Accidental/Diseases Mortality'){
            $package->coverage='accidental_diseases_mortality';
        }elseif($request->coverage=='Flood Cyclone Coverage'){
            $package->coverage='flood_cyclone_coverage';
        }elseif($request->coverage=='Earthquake Coverage'){
            $package->coverage='earthquake_coverage';
        }else{
            abort(404);
        }
        $package->premium_amount=$request->premium_amount;
        $package->lowest=$request->lowest;
        $package->highest=$request->highest;


        $package['user_id'] = auth()->user()->id;
        $package->save();
        return redirect()->route('package.create')->with('pkg','Package added successfully');
    }

    function deletePackage($id){
        $package=Package::find($id);

        $package->delete();

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
