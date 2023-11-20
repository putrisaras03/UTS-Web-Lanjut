<?php

namespace Database\Seeders;

use App\Models\tokobunga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tbungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tokobunga::create([
            "namabunga"=> "Anggrek",
            "harga"=> '10',
            'deskripsi'=> 'Bunga yang sangat indah',
        ]);
    }
}
