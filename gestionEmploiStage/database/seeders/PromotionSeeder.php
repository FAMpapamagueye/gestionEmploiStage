<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            ['libelle' => '1', 'annee' => '2019-01-01'],
            ['libelle' => '2', 'annee' => '2020-01-01']
        ]);
    }
}
