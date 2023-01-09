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
            'Phone',

            'Adress',
            'nid',
            'dob',
            'agent_employee_id',
            'Company ID',
            'Role_1',
            'Created_At',
            'Updated_At',



        ];
    }
}
