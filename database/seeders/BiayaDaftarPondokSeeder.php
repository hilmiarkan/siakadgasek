<?php

namespace Database\Seeders;

use App\Models\BiayaDaftarPondok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiayaDaftarPondokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BiayaDaftarPondok::factory(10)->create();
    }
}
