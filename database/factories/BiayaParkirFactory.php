<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BiayaParkir>
 */
class BiayaParkirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nominal' => fake()->numberBetween(1000, 100000),
            'tanggal_pembayaran' => fake()->date(),
            'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}
