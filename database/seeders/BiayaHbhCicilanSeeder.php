<?php

namespace Database\Seeders;

use App\Models\BiayaHbhCicilan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiayaHbhCicilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BiayaHbhCicilan::factory(10)->create();
    }
}
