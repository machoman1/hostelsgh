<?php

namespace Database\Seeders\Content;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class HomePageContent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(    
            'title'=>'Student Housing Made Easy....',
            'body'=>'From contract signing, to helping students search for accommodation, our not-for-profit housing charity provides students with housing support every step of the way',
        );
        DB::table('home_page_contents')->insert($data);

        $data=array(    
            'title'=>'Student to Student Noticebaord',
            'body'=>'Need another student to take over your tenancy or looking to form a group for a house share?',
        );
        DB::table('home_page_contents')->insert($data);

        $data=array(    
            'title'=>'Rent Directory From Hostelgh',
            'body'=>'We offer the best deal we can to our tenants with no fees, hidden charges or guarantors.',
        );
        DB::table('home_page_contents')->insert($data);
    }
}
