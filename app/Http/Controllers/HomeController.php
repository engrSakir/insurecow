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
        $this->middleware(['auth','company']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id()){
            if(Auth::user()->role_1==='c'){
                // return redirect()->route('home');
                return view('home');
            }
            elseif(Auth::user()->role_1=='f')
            {
                return view('/home');
            }
            elseif(Auth::user()->role_1=='b')
            {
                return view('/home');

                // return redirect('/home');
            }
            elseif(Auth::user()->role_1=='m')
            {
                return view('/home');

                // return redirect('/home');
            }
            elseif(Auth::user()->role_1=='s')
            {
                return view('/home');

                // return redirect('/home');
            }
            elseif(Auth::user()->role_2=='fa')
            {
                return view('/home');

                // return redirect('/home');
            }
            else {
                abort(404);
            }
            
    }
}
}