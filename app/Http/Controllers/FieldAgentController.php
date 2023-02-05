<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldAgentController extends Controller
{
    function index(){
        return view('fieldagent.index');
    }
}
