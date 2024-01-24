<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Invetaris/Toko',function()
{
	$produk	=	App\Models\Produk::all();
	foreach($produk	as	$data){
	echo	$data->ProdukId,".". $data->Namaproduk."-". $data->Harga."<br>", $data->KategoriID;
		}
});
