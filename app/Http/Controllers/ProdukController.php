<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('tampilan', ['produk'=> $produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);
        Produk::create([
            'nama_produk'=> $request->nama_produk,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        return view('edit', compact('produk'));
    }

    /**
     * U    pdate the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);
        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama_produk'=> $request->nama_produk,
            'stok' => $request->stok,
            'harga' => $request->harga  
        ]);
        return redirect()->route('index');
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('index');
    }
}
        