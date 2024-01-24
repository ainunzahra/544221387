<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = 'stok';
    protected $primarykey='StokID';
    protected $foreignkey='ProdukID';
    protected $fillable = [
        'StokID',
        'ProdulID',
        'JumlahStok',
        'JumlahStok',
    ];
}
