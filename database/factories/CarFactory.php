<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'year' => $this->faker->numberBetween(2000, 2020),
            'price' => $this->faker->randomFloat(2, 50000, 100000),
            'fee' => $this->faker->randomFloat(3, 0, 5000),
        ];
    }
}
