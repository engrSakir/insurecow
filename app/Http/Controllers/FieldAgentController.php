<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FieldAgentController extends Controller
{
    function index(){
        return view('fieldagent.index');
    }
    function reg(){
        return view('fieldagent.reg');
    }

    function storeFarmer(Request $request){
        $inputs=[
          'name'=>'required',
          'phone'=>'required',
          'email'=>'nullable',
          'password'=>'required|string|min:8|confirmed',

        ];
        $this->validate($request,$inputs);
        $store=new User();
        $store->name=$request->name;
        $store->phone=$request->phone;
        $store->email=$request->email;
        $store->password=Hash::make($request->password);

        $store->save();
        return redirect()->back()->with('farmer','Farmer Registration Successful');

    }
}
