<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = '_Produk';
    protected $primarykey='ProdukID';
    protected $foreignkey='KategoriID';
    protected $fillable = [
        'ProdukID',
        'Namaproduk',
        'Harga',
        'KategoriID'
    ];
}
