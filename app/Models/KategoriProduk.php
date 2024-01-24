<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    protected $table = 'kategori_produk';
    protected $foreignkey='KategoriID';
    protected $fillable = [
        'KategoriID',
        'NamakategorID',
        'Deksripsi',
    ];
}
