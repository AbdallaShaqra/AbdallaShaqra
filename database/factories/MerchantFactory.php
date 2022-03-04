<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MerchantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'merchant_name' => $this->faker->name(),
            'admin_id' => $this->faker->numberBetween(1,50),
        ];
    }
}
