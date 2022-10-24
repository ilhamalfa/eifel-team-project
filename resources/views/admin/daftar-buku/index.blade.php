@extends('admin.asset.template')

@section('main')
    <div class="row">
        <div class="col mb-4">
            <div class="card">
                <div class="card-body p-4">
                <h2 class="font-weight-bolder mb-3">Daftar Buku</h1>
                    <a href="{{ url('buku/create') }}" class="btn btn-primary">Tambah Data</a>
                    <div class="row">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listbuku as $list)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $list->judul }}</td>
                                    <td>{{ $list->penulis }}</td>
                                    <td>{{ $list->penerbit }}</td>
                                    <td>{{ $list->jumlah }}</td>
                                    <td>{{ $list->harga }}</td>
                                    <td>{{ $list->kategori->jenis_kategori }}</td>
                                    <td>
                                        <a href="{{ url('buku/'. $list->id . '/edit') }}" class="btn btn-warning text-dark">Edit</a>
                                        <a href="{{ url('buku/'. $list->id ) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-buku-{{ $list->id }}').submit();">Hapus</a>
                                        <form id="delete-buku-{{ $list->id }}"  action="{{ url('buku/'. $list->id ) }}"method="POST" onclick="return confirm('yakin mau hapus')">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection