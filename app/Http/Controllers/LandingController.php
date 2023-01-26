<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function service(){
        return view('service');
    }
    function individual_service(){
        return view('individual_service');
    }
    function about(){
        return view('about');

    }
}
