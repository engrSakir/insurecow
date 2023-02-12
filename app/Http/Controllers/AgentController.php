<?php

namespace App\Http\Controllers;

use App\Agent;
use App\AgentProfile;
use App\Company;
use App\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (AgentProfile::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first() == null) {

            return view('fieldagent.agentProfile');

        } else {
            $agent = AgentProfile::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();
            return redirect()->route('agentProfile.edit',$agent);
        }
//        return view('fieldagent.agentProfile');
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
        $inputs = [
            'present_address' => 'required',
            'permanent_address' => 'required',
            'nid' => 'required|max:13|min:10',
            'dob' => 'required|date|before:-18 years',
            'image' => 'required|mimes:jpeg,jpg,png',
        ];

        $this->validate($request, $inputs);
        $agent=new AgentProfile();
        $agent->present_address=$request->present_address;
        $agent->permanent_address=$request->permanent_address;
        $agent->nid=$request->nid;
        $agent->dob=$request->dob;
        if (request('image')) {
            $agent['image'] = \request('image')->store('images');
        }
        $agent['user_id'] = auth()->user()->id;
        $agent->save();



        return redirect()->back()->with('agent','Profile Set Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        $agent = AgentProfile::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();
        return view('fieldagent.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = [
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'nid' => 'required|max:13|min:10',
            'dob' => 'required|date|before:-18 years',
            'image' => 'mimes:jpeg,jpg,png',
        ];

        $this->validate($request, $inputs);
        $agent=AgentProfile::find($id);
        $agent->present_address=$request->present_address;
        $agent->permanent_address=$request->permanent_address;
        $agent->nid=$request->nid;
        $agent->dob=$request->dob;
        if (request('image')) {
            $agent['image'] = \request('image')->store('images');
        } else {
            $agent['image'] = $agent->image;
        }
        $agent->save();

        $user_data = $agent->user_id;

        $user = User::findOrFail($user_data);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->back()->with('agents','Profile Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
