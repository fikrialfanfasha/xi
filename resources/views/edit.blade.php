<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Data Produk</title>
</head>
<body>
    <h1>Edit Data Produk</h1>
    <form action="{{ route('update', ['id' => $produk->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_produk">Nama Produk:</label><br>
        <input type="text" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}"><br>
        <label for="stok">Stok:</label><br>
        <input type="number" id="stok" name="stok" value="{{ $produk->stok }}"><br>
        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga" value="{{ $produk->harga }}"><br><br>
        <button class="btn btn-success" type="submit">Update</button>
    </form>
</body>
</html>
