<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stok')->insert([
            'StokID' => '1243901',
            'ProdukID' => '982456',
            'JumlahStok' => '7',
            'LokasiProduk' => 'gudang',
        ]);
        //
    }
}
