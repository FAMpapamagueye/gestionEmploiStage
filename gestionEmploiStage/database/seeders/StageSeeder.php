<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Stage;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 5; $i++) {
            Stage::create([
                'poste' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'moniteur' => $faker->firstName() . ' ' .$faker->lastName(),
                'debut' => $faker->dateTimeBetween('2022-01-01', '2022-02-01'),
                'fin' => $faker->dateTimeBetween('2022-02-02', '2022-03-01'),
                'entreprise_id' => $i,
                'apprenant_id' => $i
            ]);
        }
    }
}
