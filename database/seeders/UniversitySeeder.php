<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UniversitySeeder extends Seeder
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
            'name'=>    'UEW',
            'city'=>    'Winneba',
            'website'=>  'www.uew.edu.gh',
            'address'=>   'CE-5487741-GH',
        );
        DB::table('universities')->insert($data);

        $data=array(    
            'name'=>    'UCC',
            'city'=>    'Cape Coast',
            'website'=>  'www.ucc.edu.gh',
            'address'=>   'CE-34847521-GH',
        );
        DB::table('universities')->insert($data);

        $data=array(    
            'name'=>    'UG',
            'city'=>    'Accra',
            'website'=>  'www.ug.edu.gh',
            'address'=>   'CE-94123741-GH',
        );
        DB::table('universities')->insert($data);

        $data=array(    
            'name'=>    'TTU',
            'city'=>    'Tarkoradi',
            'website'=>  'www.ttu.edu.gh',
            'address'=>   'CE-75487741-GH',
        );
        DB::table('universities')->insert($data);

        $data=array(    
            'name'=>    'KNUST',
            'city'=>    'Kumasi',
            'website'=>  'www.knust.edu.gh',
            'address'=>   'CE-5487741-GH',
        );
        DB::table('universities')->insert($data);
    }
}
