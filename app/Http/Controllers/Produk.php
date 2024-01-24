<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class Produk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * /
    public function index()
    {
        $produk = Produk::all();
        return view('index')->('Produk', $Produk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Reuqest $request)
    {
        $input = $request->all();
        Produk::create($input);
        return redirect('buku')->with('flash_message', 'Produk Berhasil Ditambahkam');
    }

    /**
     * Display the spectified resource.
     *
     * @param int &id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('edit')->with('produk', $produk);
    }

    /**
     * Update the specified in sotrage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $input = $request->all();
        $produk->update($input);
        return redirect('produk')->with('flash_message', 'Produk Berhasil Di Update');
    }

    /**
     * Remove the spectified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::destroy($id);
        return redirect('produl')->with('flash_message', 'Produk Berhasil DiHapus!');
    }
}
