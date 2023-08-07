<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name' => 'Super Admin',
            'email' => 'super.admin@example.com',
            'email_verified_at' => time(),
            'password' => bcrypt('12345678'),
            'phone' => '01304734623',
            'adress' => 'West Agargaon',
            'nid' => '123123123',
            'dob' => '1995-05-01',
            'agent_employee_id' => null,
            'company_id' => null,
            'agent_id' => null,
            'role_1' => 's' // s for super admin
        ]);

        User::create([
            'name' => 'Mr. Farmer',
            'email' => 'farmer@example.com',
            'email_verified_at' => time(),
            'password' => bcrypt('12345678'),
            'phone' => '01304734624',
            'adress' => 'Mirpur 12',
            'nid' => '123123124',
            'dob' => '1995-05-01',
            'agent_employee_id' => null,
            'company_id' => null,
            'agent_id' => null,
            'role_1' => 'f' // f for Farmer
        ]);

        User::create([
            'name' => 'Mr. Field Agent',
            'email' => 'field.agent@example.com',
            'email_verified_at' => time(),
            'password' => bcrypt('12345678'),
            'phone' => '01304734625',
            'adress' => 'Mirpur 14',
            'nid' => '123123125',
            'dob' => '1995-06-01',
            'agent_employee_id' => null,
            'company_id' => null,
            'agent_id' => null,
            'role_1' => 'fa' // fa for Field Agent
        ]);

        User::create([
            'name' => 'Mr. Company',
            'email' => 'company@example.com',
            'email_verified_at' => time(),
            'password' => bcrypt('12345678'),
            'phone' => '01304734626',
            'adress' => 'Mirpur 11',
            'nid' => '123123126',
            'dob' => '1995-06-01',
            'agent_employee_id' => null,
            'company_id' => null,
            'agent_id' => null,
            'role_1' => 'c' // c for Company
        ]);



    }
}
