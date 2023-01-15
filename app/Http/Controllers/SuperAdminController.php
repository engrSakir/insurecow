<?php

namespace App\Http\Controllers;

use Composer\Autoload\ClassLoader;
use Illuminate\Http\Request;
use App\User;
use App\Agent;
use App\Company;
use App\Farmer_reg_1;
use App\Medical;
use App\Profile;
use App\Send;
use Illuminate\Support\Facades\Hash;
// use Barryvdh\DomPDF\Facade\PDF;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "test";
        $user=User::all();
        $agent = User::where('role_1','fa')->get();
//        $company=Company::where('user_id',\auth()->user()->id)->orderBy('id','desc')->first();
        $company=Company::all();
        $farmer = Farmer_reg_1::all();
        $medical = Medical::all();
        return view('superadmin.index',compact('user','agent','farmer','medical','company'));
    }
    function reg(){
        return view('superadmin.reg');

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
            'password' => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'adress'=>'required|max:30',
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
        return redirect()->back()->with('message','Registration successfully complete !!');
    }
    function delete($id){
        $user=User::find($id);
        if($user->role_1=='s'){
            return redirect()->back()->with('warn',"Don't try to delete this !!");
        }else {
        $user->delete();
        }

        return redirect()->back();
    }

    function download(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    function  view(){
        $user= User::firstOrFail();
        return view('superadmin.viewall',compact('user'));
    }


    function companyRequest(){
        $send=Send::all();
        return view('superadmin.company_request',compact('send'));
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

    public function saveProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $profile = new Profile;
        $profile->website   = $request->website;
        $profile->about     = $request->about;
        $profile->user_id   = Auth::user()->id;

        if (request('image')) {
            $profile->image = \request('image')->store('images');
        }

        $user->profile()->save($profile);
    }

    public function history()
    {
        $user=User::all();
        return view('superadmin.history', compact('user'));
    }
}
