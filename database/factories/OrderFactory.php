<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,50),
            'status' => $this->faker->text(),
            'created_at' => $this->faker->dateTimeBetween("2022-01-01","2022-03-01")
        ];
    }
}
