<?php

namespace Database\Seeders;

use App\Models\BiayaDaftarPondokCicilan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiayaDaftarPondokCicilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BiayaDaftarPondokCicilan::factory(10)->create();
    }
}
