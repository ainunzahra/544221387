<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_produk')->insert([
            'KategoriID' => '102102',
            'NamaKategori' => 'Elektronik',
            'Deksripsi' => 'Produk Elektronik',
        ]);
        //
    }
}
