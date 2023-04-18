<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

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
        $data=array(    
            'name'=>'Admin',
            'role_as'=>'0',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123'),
        );
        DB::table('users')->insert($data);
    }
}
