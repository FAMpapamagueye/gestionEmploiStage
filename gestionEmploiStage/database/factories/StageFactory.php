<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'poste' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'moniteur' => $this->faker->firstName() . ' ' .$this->faker->lastName(),
            'debut' => $this->faker->dateTimeBetween('2022-01-01', '2022-02-01'),
            'fin' => $this->faker->dateTimeBetween('2022-02-02', '2022-03-01'),
            'entreprise_id' => rand(1, 5),
            'apprenant_id' => rand(1,25)
        ];
    }
}
