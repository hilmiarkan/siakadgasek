<?php

namespace Database\Factories;

use App\Models\BiayaDaftarPondok;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BiayaDaftarPondokCicilan>
 */
class BiayaDaftarPondokCicilanFactory extends Factory
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
            'nominal' => $this->faker->randomNumber(6),
            'biaya_daftar_pondok_id' => BiayaDaftarPondok::factory()
        ];
    }
}
