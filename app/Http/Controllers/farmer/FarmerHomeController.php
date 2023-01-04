<?php

namespace App\Http\Controllers\farmer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FarmerHomeController extends Controller
{
    function index(){
        return view('farmer.home.index');
    }
}
