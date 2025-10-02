<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseTableSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            BukuTableSeeder::class,
        ]);
    }
}
