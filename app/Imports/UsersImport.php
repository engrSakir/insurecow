<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    protected $agent_id;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function __construct($agent_id)
    {
        $this->agent_id = $agent_id;
    }
    public function model(array $row)
    {

        $user= new User([
            'name'     => $row['name'],
            'email'     => $row['email'],
            'phone'     => $row['phone'],
            'password' => Hash::make($row['password']),
            'agent_id'=> $this->agent_id,

        ]);
        $user->agent_id = $this->agent_id;
        return $user;
    }
}
