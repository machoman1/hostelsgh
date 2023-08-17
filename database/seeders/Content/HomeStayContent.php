<?php

namespace Database\Seeders\Content;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeStayContent extends Seeder
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
            'title'=>'Homestay Accommodation Services for Students',
            'body'=>'If you are studying in the Language Centre then you could apply for Homestay accommodation and live with a local family in our Housing. Homestay is a great way to fully immerse yourself in Ghanian culture. If you are only coming to the Ghana for a short period of time, living with a local family will allow you to continue to practice your developing language skills in a safe environment. Our hosts are very experienced in opening their homes to international students and will support you and make you feel part of their family during your time in Ghana.',
        );
        DB::table('home_page_contents')->insert($data);

    }
}
