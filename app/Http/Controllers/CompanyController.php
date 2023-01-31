<?php

namespace App\Http\Controllers;

use App\Policy;
use App\Quotation;
use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Agent;
use App\Farmer_reg_1;

use App\Medical;


use Illuminate\Support\Facades\Hash;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class CompanyController extends Controller
{
    public function index()
    {
        $user=User::where('role_1','fa')->where('company_id', auth()->user()->id)->get();
        $agent = Agent::all();
        $company = Company::all();
        $farmer = Farmer_reg_1::all();
        $medical = Medical::all();
        return view('company.index',compact('user','agent','company','farmer','medical'));
    }

    function reg(){

        return view('company.reg');

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
        $validate=[
            'name'=>'required|max:20',
            'phone'=>'required|unique:users',
            'email'=>'required|unique:users',
            'adress'=>'required|max:30',
            'agent_employee_id'=>'required|unique:users',

        ];
        $this->validate($request,$validate);

        $user=new User;
        $user->name=$request->name;
        $user->phone=$request->phone;

        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->adress=$request->adress;
        $user->agent_employee_id=$request->agent_employee_id;
        $user->company_id= auth()->user()->id;


        if ($request->role_1=='Field Agent'){
            $user->role_1='fa';
        }else{
            abort(404);
        }
        $user->save();
        return redirect()->back()->with('message','Registration successfully complete');
    }
    function delete($id){
        $user=User::find($id);

        $user->delete();

        return redirect()->back();
    }

    function download(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    function  view($id){

        $user= User::where('role_1','fa')->where('company_id', auth()->user()->id)->where('id', $id)->first();
        return view('company.viewagent',compact('user'));
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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

    public function history()
    {
        $user=User::where('role_1','fa')->where('company_id', auth()->user()->id)->get();
        return view('company.history', compact('user'));
    }

    function viewQuotation(){
        $quotation=Quotation::where('user_id',auth()->user()->id)->orderBy('id','desc')->first();
        return view('company.quotation_view',compact('quotation'));
    }
    function viewPolicy(){
        $profile=Company::where('user_id',auth()->user()->id)->firstOrFail();


        $policy=Policy::where('user_id',auth()->user()->id)->orderBy('id','desc')->first();
        return view('company.policy_view',compact('policy','profile'));
    }
}
