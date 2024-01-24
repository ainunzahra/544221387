<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi')->insert([
            'TransaksiID' => '1',
            'ProdukID' => '1',
            'Jumlahprodukterjual' => '5',
            'Hargatotal' => '65000',
            'TanggalTransaksi' => '2024-01-24',
        ]);
        //
    }
}
