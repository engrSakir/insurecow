<?php

namespace App\Http\Controllers;

use App\Pending;
use Illuminate\Http\Request;

class CompanyPendingQuotationController extends Controller
{
    function index(){


        $show=Pending::where('company_id',auth()->user()->id)->get();



        return view('company.pending_quotation',compact('show'));
    }
    public function approved($id){
        $data=Pending::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id) {
        $data=Pending::find($id);
        $data->status='canceled';
        $data->save();
        return redirect()->back();
    }

}
