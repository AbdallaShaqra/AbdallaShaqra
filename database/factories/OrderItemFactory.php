<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween(1,50),
            'product_id' => $this->faker->numberBetween(1,50),
            'quantity' => $this->faker->numberBetween(1,20),
        ];
    }
}
