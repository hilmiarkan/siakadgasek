<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BiayaDaftarUlang>
 */
class BiayaDaftarUlangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'semester' => $this->faker->randomElement(['Ganjil', 'Genap']),
            'tahun' => $this->faker->year(),
            'tanggal_pembayaran' => $this->faker->date(),
            'nominal' => $this->faker->numberBetween(100000, 1000000),
            'user_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
