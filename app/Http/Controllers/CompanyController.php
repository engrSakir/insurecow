<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();

        return view('company.index',compact('user'));
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
            'email'=>'required|email',
            'address'=>'required|max:30',
        ];
        $this->validate($request,$validate);
        $user=new User;
        $user->name=$request->name;
        $user->phone=$request->phone;

        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->adress=$request->adress;
        $user->role_1=$request->role_1;
        $user->save();
        return redirect()->back()->with('message','Registration successfully complete');
    }
    function delete($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

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
