<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.index');
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
        ];
        $this->validate($request,$validate);
        
        $user=new User;
        $user->name=$request->name;
        $user->phone=$request->phone;

        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->adress=$request->adress;
        $user->role_2=$request->role_2;
        $user->save();
        return redirect()->back()->with('message','Registration successfully complete');
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
