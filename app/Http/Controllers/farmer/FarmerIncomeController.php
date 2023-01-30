<?php

namespace App\Http\Controllers\farmer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FarmerIncome;
use Carbon\Carbon;

class FarmerIncomeController extends Controller
{
    public function new(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'amount' => 'required',
            'cattle_id' => 'required',
            'invoice' => 'required',
            'comment' => 'required',
        ]);

        FarmerIncome::create([
            'date' => $request->date,
            'amount' => $request->amount,
            'cattle_id' => $request->cattle_id,
            'user_id' => auth()->user()->id,
            'invoice' => $request->invoice,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Income added successfully.');
    }
}
