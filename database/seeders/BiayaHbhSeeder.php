<?php

namespace Database\Seeders;

use App\Models\BiayaHbh;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiayaHbhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BiayaHbh::factory(10)->create();
    }
}
