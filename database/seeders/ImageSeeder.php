<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array( 
            'image'=>'H-GH.png',   
            'type'=>'SystemLogo'
        );
        DB::table('images')->insert($data);

    }
}
