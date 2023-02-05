<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmer_reg_1;
use App\Farmer_reg_2;
use App\Medical;
use App\FarmerExpense;
use App\FarmerIncome;
use Auth;

use App\Exports\CattlesExport;
use Maatwebsite\Excel\Facades\Excel;
class FarmerDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = FarmerIncome::where('user_id', auth()->user()->id)->get()->sum('amount');
        $totalNumberIncome = FarmerIncome::where('user_id', auth()->user()->id)->get()->count();
        if ($total != 0 && $totalNumberIncome != 0) {
            $percentage = $totalNumberIncome / $total * 100;
        }else {
            $percentage = 0;
        }
        $cattles = Farmer_reg_2::where('user_id', auth()->user()->id)->get();
        return view('fdashboard.index', compact('cattles', 'percentage'));
    }

    public function cattle()
    {
        $cattles = Farmer_reg_2::where('user_id', auth()->user()->id)->get();
        $registeredcattles = Farmer_reg_2::where('user_id', Auth::user()->id)->get();
        return view('fdashboard.cattle', compact('registeredcattles', 'cattles'));
    }

    public function financial()
    {
        $cattles = Farmer_reg_2::where('user_id', auth()->user()->id)->get();
        return view('fdashboard.financial', compact('cattles'));
    }

    public function report()
    {
        $registeredcattles = Medical::where('user_id', auth()->user()->id)->get();
        $cattles = Farmer_reg_2::where('user_id', auth()->user()->id)->get(); 
        return view('fdashboard.report', compact('registeredcattles', 'cattles'));
    }

    public function reportShow($id)
    {
        $cattle = Farmer_reg_2::findOrFail($id);
        $medicals = Medical::where('user_id', auth()->user()->id)->get();
        $cattles = Farmer_reg_2::where('user_id', auth()->user()->id)->get();
        return view('fdashboard.report-single', compact('cattle', 'medicals', 'cattles'));
    }


    public function reportCattle($id)
    {
        $registeredcattle = Farmer_reg_2::findOrFail($id);
        $certificate = Farmer_reg_1::where('user_id', auth()->user()->id)->first();
        $expenses = FarmerExpense::where('category', '=', 'medical')->where('cattle_id', $id)->get()->sum('amount');
        $expensesfood = FarmerExpense::where('category', '=', 'food')->where('cattle_id', $id)->get()->sum('amount');
        $totalprofit = ($registeredcattle->price + $expenses + $expensesfood * 40) / 100;
        $cattles= Farmer_reg_2::where('user_id', auth()->user()->id)->get();
        return view('fdashboard.cattle-single', compact('registeredcattle', 'certificate', 'expenses', 'expensesfood', 'totalprofit', 'cattles'));
    }

    public function export() 
    {
        return Excel::download(new CattlesExport, 'cattles.xlsx');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
