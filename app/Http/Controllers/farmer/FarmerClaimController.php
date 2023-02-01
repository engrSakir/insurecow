<?php

namespace App\Http\Controllers\farmer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Farmer_reg_2;

class FarmerClaimController extends Controller
{
    public function index()
    {
        $cattles = Farmer_reg_2::where('user_id', auth()->user()->id)->get();
        return view('farmer.claim.index', compact('cattles'));
    }

    public function confirm()
    {
        return view('farmer.claim.claim-confimation');
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
