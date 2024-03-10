<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BiayaSyahriahSeeder::class,
            BiayaDaftarUlangSeeder::class,
            BiayaParkirSeeder::class,
            BiayaDaftarPondokSeeder::class,
            BiayaHbhSeeder::class,
            BiayaDaftarPondokCicilanSeeder::class,
            BiayaHbhCicilanSeeder::class,
        ]);
    }
}
