<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RegionSeeder::class);
        // $this->call(CategorySeeder::class);
        $this->call(TypeJobSeeder::class);
        // \App\Models\User::factory(30)->create();
        \App\Models\Job::factory(200)->create();
    }
}
