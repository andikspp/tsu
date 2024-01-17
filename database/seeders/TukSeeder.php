<?php

namespace Database\Seeders;

use App\Models\Tuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tuk::factory()
            ->count(10)
            ->create();
    }
}
