<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class PropertyTypeSeeder extends Seeder
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
            'name'=>'Student Development',
        );
        DB::table('property_types')->insert($data);

        $data=array(    
            'name'=>'Hall',
        );
        DB::table('property_types')->insert($data);

        $data=array(    
            'name'=>'Family Property',
        );
        DB::table('property_types')->insert($data);

        $data=array(    
            'name'=>'Flat',
        );
        DB::table('property_types')->insert($data);

        $data=array(    
            'name'=>'House',
        );
        DB::table('property_types')->insert($data);

    }
}
