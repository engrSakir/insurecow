<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use Illuminate\Support\Facades\Hash;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class CompanyController extends Controller
{
    public function index()
    {
        $company=User::all();
        return view('company.index',compact('company'));
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
            'email'=>'required|email',
            'adress'=>'required|max:30',
            'agent_employee_id'=>'required',

        ];
        $this->validate($request,$validate);

        $user=new User;
        $user->name=$request->name;
        $user->phone=$request->phone;

        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->adress=$request->adress;
        $user->agent_employee_id=$request->agent_employee_id;

        $user->role_1=$request->role_1;
        $user->save();
        return redirect()->back()->with('message','Registration successfully complete');
    }
    function delete($id){
        $user=User::find($id);
        if($user->role_1=='s'){
            return "don't try to delete this";
        }else {
        $user->delete();
        }
        return redirect()->back();
    }

    function download(){
        return Excel::download(new UsersExport, 'users.xlsx');
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

  
}
