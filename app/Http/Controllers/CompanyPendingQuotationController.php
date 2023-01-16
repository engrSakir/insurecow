<?php

namespace App\Http\Controllers;

use App\Pending;
use Illuminate\Http\Request;

class CompanyPendingQuotationController extends Controller
{
    function index(){


        $show=Pending::where('company_id',auth()->user()->id)->get();

       

        return view('company.pending_quotation',compact($show));
    }

}
