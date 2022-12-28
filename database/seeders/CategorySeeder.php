<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            ['name'=> 'Informatique',
            'slug' => 'Informatique'],

            ['name'=> 'Nouvelles technologies',
            'slug' => 'Nouvelles technologies'] ,

            ['name'=> 'Cormmercial',
            'slug' =>'Commercial'] ,

            ['name'=> 'Vente',
            'slug' =>'Commercial'] ,

            ['name'=> 'Stage',
            'slug' => 'Stage'],

            ['name'=> 'Gestion de projet',
            'slug' => 'Gestion de projet'] ,

            ['name'=> 'Métiers de la sante',
            'slug' => 'Métiers de la sante'] ,


            ['name'=> 'Agroalimentaire',
            'slug' => 'Agroalimentaire'] ,

            ['name'=> 'Conseil, audit, comptabilité',
            'slug' =>'Conseil, audit, comptabilité'],

            ['name'=> 'Banque, assurance, finances',
        'slug' => 'Banque, assurance, finances'],

            ['name'=> 'BTP, construction',
            'slug' => 'BTP, construction'
        ],

            ['name'=> 'Electronique',
        'slug' =>'Electronique'],

            ['name'=> 'Electricite gaz et eau',
        'slug' =>'Electricite gaz et eau'],

            ['name'=> 'Tourisme, hôtellerie, restauration',
        'slug' => 'Tourisme, hôtellerie, restauration'],

            ['name'=> 'Transport, logistique',
        'slug' =>'Transport, logistique'],

            ['name'=> 'Production, maintenance',
        'slug' => 'Production, maintenance'],

            ['name'=> 'Marketing, communication',
        'slug' =>'Marketing, communication'],

            ['name'=> 'Management',
        'slug' =>'Management'],

            ['name'=> 'Secrétariat, assistanat',
        'slug' => 'Secrétariat, assistanat'],

            ['name'=> 'Télémarketing, téléassistance',
        'slug' =>'Télémarketing, téléassistance'],
        ]);

    }
}
