<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['region'=> 'Abidjan',
            'slug' => 'Abidjan'] ,
            ['region'=> 'Abengourou',
            'slug' => 'Abengourou'] ,
            ['region'=> 'France',
            'slug' => 'France'],
            ['region'=> 'Daloa',
            'slug' => 'Daloa'] ,
            ['region'=> 'Canada',
            'slug' => 'Canada'] ,
        ]);



    }
}
