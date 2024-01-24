<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggan')->insert([
            'PelangganID' => '1',
            'NamaPelanggan' => 'Johnny',
            'Alamat' => 'Jl.Merdeka 127',
            'NomorTelp' => '081234127',
        ]);
        //
    }
}
