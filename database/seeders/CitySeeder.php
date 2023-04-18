<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CitySeeder extends Seeder
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
            'name'=>'Accra',
        );
        DB::table('cities')->insert($data);

        $data=array(    
            'name'=>'Kumasi',
        );
        DB::table('cities')->insert($data);

        $data=array(    
            'name'=>'Tarkoradi',
        );
        DB::table('cities')->insert($data);

        $data=array(    
            'name'=>'Winneba',
        );
        DB::table('cities')->insert($data);

        $data=array(    
            'name'=>'Cape Coast',
        );
        DB::table('cities')->insert($data);

    }
}
