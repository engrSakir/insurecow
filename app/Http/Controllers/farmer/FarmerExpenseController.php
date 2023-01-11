<?php

namespace App\Http\Controllers\farmer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FarmerExpense;
use App\Medical;
use File;
use Response;
use Illuminate\Support\Facades\Auth;

class FarmerExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = FarmerExpense::findOrFail($id);
        return view('farmer.expense-edit', compact('expense'));
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
        $expense = FarmerExpense::findOrFail($id);
        $expense->amount = $request->amount;
        $expense->save();

        return redirect()->route('farmer.expense')->with('success', 'Expense amount updated successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expense = FarmerExpense::findOrFail($id);
        $expense->delete();

        return redirect()->back();
    }

    public function history()
    {
        $history = FarmerExpense::all();
        return view('farmer.expense-history', compact('history'));
    }

    public function medicalhistory()
    {
        $vaccine = Medical::all();
        return view('farmer.medical-history', compact('vaccine'));
    }

    public function confirm()
    {
        return view('farmer.confirmation');
    }

    public function viewpdf($id, $cattle_id)
    {
        $medical = Medical::where('id', $id)->where('cattle_id', $cattle_id)->where('user_id', Auth::user()->id)->first();
        if($medical)
        {
            return Response::make(file_get_contents('storage/'.$medical->pdf_file), 200, [
                'content-type'=>'application/pdf',
            ]);
        }
        return redirect()->back();
    }
}
