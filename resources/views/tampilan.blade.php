@extends('master')
@section('content')
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <a href="{{ url('/tambah') }}" class="btn btn-primary">
                                + Tambah Data Produk
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered" border="1">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Nama </th>
                                        <th class="px-4 py-2">Stok</th>
                                        <th class="px-4 py-2">Harga</th>
                                        <th> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($produk as $p)
                                        <tr>
                                            <td class="px-4 py-2">{{ $p->nama_produk }}</td>
                                            <td class="px-4 py-2">{{ $p->stok }}</td>
                                            <td class="px-4 py-2">{{ $p->harga }}</td>
                                            <td>
                                                <form action="{{ route('destroy', $p->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit">Hapus</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="px-4 py-2 text-center">Tidak ada data Produk.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection