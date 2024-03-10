<?php

namespace Database\Seeders;

use App\Models\BiayaSyahriah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiayaSyahriahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BiayaSyahriah::factory(10)->create();
    }
}
