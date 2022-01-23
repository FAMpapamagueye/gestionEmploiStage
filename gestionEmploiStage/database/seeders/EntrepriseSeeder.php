<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entreprises')->insert([
            ['libelle' => 'Neuro tech', 'domaine' => 'IT', 'localite' => 'Dakar'],
            ['libelle' => 'Isep Diamniadio', 'domaine' => 'Enseignement', 'localite' => 'Thies'],
            ['libelle' => 'InfoTech', 'domaine' => 'Informatique', 'localite' => 'Dakar'],
            ['libelle' => 'AGT-COMPANY', 'domaine' => 'Informatique', 'localite' => 'Podor'],
            ['libelle' => 'sntechsenegal', 'domaine' => 'Electronique', 'localite' => 'Saint-Louis'],
        ]);
    }
}
