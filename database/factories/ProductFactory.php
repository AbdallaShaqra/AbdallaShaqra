<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'merchant_id' => $this->faker->numberBetween(1,50),
            'price' => $this->faker->numberBetween(10,200),
            'status' => $this->faker->text(),
        ];
    }
}
