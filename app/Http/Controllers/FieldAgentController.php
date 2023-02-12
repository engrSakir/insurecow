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
          'nid'=>'required|max:13|min:10',
          'dob'=>'required|date|before:-18 years',
          'password'=>'required|string|min:8|confirmed',

        ];
        $this->validate($request,$inputs);
        $store=new User();
        $store->name=$request->name;
        $store->phone=$request->phone;
        $store->email=$request->email;
        $store->nid=$request->nid;
        $store->dob=$request->dob;
        $store->password=Hash::make($request->password);
        $store->agent_id= auth()->user()->id;

        $store->save();
        return redirect()->back()->with('farmer','Farmer Registration Successful');

    }

    function registeredFarmer(){
        $farmer=User::where('role_1','f')->where('agent_id', auth()->user()->id)->get();
        return view('fieldagent.registeredFarmer',compact('farmer'));

    }
}
