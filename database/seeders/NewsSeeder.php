<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class NewsSeeder extends Seeder
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
            'title'=>'Awal Saeed: Unihouse new student accommodation in Cape Coast',
            'content'=> 'Work is underway to refurbish this beautiful Grade II listed building on Beaxh Road,Unisall, ready for students to move in in September 2023.',
            'image'=>'family.jpg',   
        );
        DB::table('news')->insert($data);

        $data=array(    
            'title'=>'Avoiding Housing Contract Scams',
            'content'=> 'Unipol has become aware of an increase in rental scams circulating via social media, particularly on Facebook.',
            'image'=>'family.jpg',   
        );
        DB::table('news')->insert($data);

        $data=array(    
            'title'=>'Superb Social Spaces',
            'content'=> 'This blog post features a selection of our properties with amazing communal areas, to give you a taste of what’s on offer.',
            'image'=>'family.jpg',   
        );
        DB::table('news')->insert($data);


    }
}
