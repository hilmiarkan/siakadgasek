<?php

namespace Database\Seeders;

use App\Models\BiayaDaftarUlang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiayaDaftarUlangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BiayaDaftarUlang::factory(10)->create();
    }
}
