<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tambahkan pemanggilan seeder lain di sini jika perlu, contoh:
        // $this->call(UserSeeder::class);
    }
}
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Panggil seeder lain di sini, contoh:
        $this->call(UserSeeder::class);
    }
}
