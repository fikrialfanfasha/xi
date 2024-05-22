@extends('master')
@section('content')
<body>
    <h1>Tambah Data Produk</h1>
    <form action="{{route ('store') }}" method="POST">
        @csrf
        <label for="nama_produk">Nama Produk:</label><br>
        <input type="text" id="nama_produk" name="nama_produk"><br>
        <label for="stok">Stok:</label><br>
        <input type="number" id="stok" name="stok"><br>
        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga"><br><br>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
@endsection