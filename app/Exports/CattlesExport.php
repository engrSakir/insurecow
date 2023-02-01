<?php

namespace App\Exports;

use App\Farmer_reg_2;
use Maatwebsite\Excel\Concerns\FromCollection;

class CattlesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Farmer_reg_2::where('user_id', auth()->user()->id)->get();
    }
}
