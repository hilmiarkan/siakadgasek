<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    public function run() {
        // User::factory(10)->create();

        $user = [
            [
                'nama' => 'Admin',
                'kamar' => 1,
                'komplek' => 'A',
                'angkatan' => 2021,
                'no_hp' => '081234567890',
                'alamat' => 'Jl. Jalan',
                'plat' => 'A',
                'nama_wali' => 'Wali',
                'no_hp_wali' => '081234567890',
                'universitas' => 'UI',
                'email' => 'ok@gmail.com',
                'password' => bcrypt('password')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
