<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BiayaSyahriah>
 */
class BiayaSyahriahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tanggal_keluaran = $this->faker->dateTimeThisDecade;
        $tanggal_pembayaran = (clone $tanggal_keluaran)->modify('+1 day');

        return [
            'tanggal_keluaran' => $tanggal_keluaran,
            'tanggal_pembayaran' => $tanggal_pembayaran,
            'nominal' => $this->faker->numberBetween(100000, 1000000),
            'user_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
