<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth','company']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id()){
            if(Auth::user()->role_1=='c'){
                return redirect()->route('company.index');
                // return view('home');
                // return "company";
            }
            elseif(Auth::user()->role_1=='f')
            {
                // return view('/home');
                return redirect()->route('farmer.index');
            }
            elseif(Auth::user()->role_1=='b')
            {
                // return view('/home');
                return "bank";

                // return redirect('/home');
            }
            elseif(Auth::user()->role_1=='m')
            {
                // return view('/home');
                return "mfi";

                // return redirect('/home');
            }
            elseif(Auth::user()->role_1=='s')
            {
                return redirect()->route('superadmin.index');


            }
            elseif(Auth::user()->role_1=='fa')
            {
                // return view('/home');
//                return "field agent";
                return redirect()->route('fieldagent.index');


                // return redirect('/home');
            }
            else {
                abort(403);
            }

    }
}
}
