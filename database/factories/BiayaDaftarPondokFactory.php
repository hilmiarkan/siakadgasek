<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BiayaDaftarPondok>
 */
class BiayaDaftarPondokFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tahun' => $this->faker->year,
            'total_biaya' => $this->faker->randomNumber(6),
            'user_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
