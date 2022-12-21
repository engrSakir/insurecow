<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
    function headings(): array
    {
        return [
            'SL No.',
            'Company Name',
            'Email',
            '',
            'Adress',
            'Phone',
            'Role_1',
            'Role_2',
            'Created_At',
            'Updated_At',


            
        ];
    }
}
