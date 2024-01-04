<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barcode'=>fake()->unique->name,
            'name'=>fake()->name,
            'buy_price'=>fake()->numberBetween(1,10000),
            'selling_price'=>fake()->numberBetween(1,10000),
            'quantity'=>fake()->randomNumber,
            'create_date'=>fake()->date,
            'expire_date'=>fake()->date,

            'category_id'=>1
        ];
    }
}
