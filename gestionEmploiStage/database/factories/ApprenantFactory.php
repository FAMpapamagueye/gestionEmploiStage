<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApprenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prenom' => $this->faker->firstName(),
            'nom' => $this->faker->lastName(),
            'sexe' => array_rand(array_flip(['H', 'F']), 1),
            'date_naissance' => $this->faker->dateTimeBetween('1980-01-01', '2001-12-30'),
            'filiere_id' => rand(1,4),
            'promotion_id' => rand(1,2),
        ];
    }
}
