<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primarykey='TransaksiID';
    protected $foreignkey='ProdukID';
    protected $fillable = [
        'TransaksiID',
        'ProdukID',
        'Jumlahprodukterjual',
        'HargaTotal',
        'TanggalTransaksi',
    ];
}
