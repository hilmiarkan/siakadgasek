<?php

namespace Database\Factories;

use App\Models\BiayaHbh;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BiayaHbhCicilan>
 */
class BiayaHbhCicilanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal_pembayaran' => $this->faker->date(),
            'nominal' => $this->faker->randomNumber(),
            'biaya_hbh_id' => BiayaHbh::factory()
        ];
    }
}
