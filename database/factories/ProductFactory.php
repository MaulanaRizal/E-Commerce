<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'product_name' => fake()->word(),
            'price' => fake()->numberBetween(10,100)*1000,
            'quantity' => fake()->numberBetween(10,100),
            'code_stock' => fake()->numerify('STCK-####'),
            'date_stock' => fake()->dateTimeInInterval('-1 week', '0 days'),
            'expired_date' => fake()->dateTimeInInterval('+3 days', '+6 months')
        ];
    }
}
