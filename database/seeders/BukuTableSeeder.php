<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuTableSeeder extends Seeder
{
    public function run(): void
    {
        
           $buku =[
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'penerbit' => 'Bentang Pustaka',
                'tahun_terbit' => 2005,
                'genre' => 'Fiksi'
            ];
            
    }
    DB::table('buku')->insert($buku);
}
