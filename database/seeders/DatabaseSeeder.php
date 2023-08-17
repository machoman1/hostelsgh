<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Content\HomePageContent;
use Database\Seeders\Content\HomePageContent as ContentHomePageContent;
use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(UniversitySeeder::class);
        $this->call(PropertyTypeSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(NoticebordSeeder::class);
        $this->call(ImageSeeder::class);

        //content
        $this->call(ContentHomePageContent::class);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
