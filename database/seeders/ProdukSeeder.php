<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_Produk')->insert([
            'ProdukID' => '223124',
            'Namaproduk' => 'AC',
            'Harga' => '320000',
            'KategoriID' => '2',
        ]);
        //
    }
}
