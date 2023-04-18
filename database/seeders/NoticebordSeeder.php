<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class NoticebordSeeder extends Seeder
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
            'title'=>'Accomodation Wanted',
            'content'=> 'For students looking for rooms to share with other students. Owners and agents may not post on this noticeboard.',
        );
        DB::table('noticebords')->insert($data);

        $data=array(    
            'title'=>'Accomodation Available',
            'content'=> 'For students looking for rooms to share with other students. Owners and agents may not post on this noticeboard.',
        );
        DB::table('noticebords')->insert($data);


        $data=array(    
            'title'=>'Forming a group to look for housing',
            'content'=> 'For students looking for rooms to share with other students. Owners and agents may not post on this noticeboard.',
        );
        DB::table('noticebords')->insert($data);

        $data=array(    
            'title'=>'Postgraduates',
            'content'=> 'For students looking for rooms to share with other students. Owners and agents may not post on this noticeboard.',
        );
        DB::table('noticebords')->insert($data);


    }
}
