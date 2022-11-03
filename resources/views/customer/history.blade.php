@extends('customer.layouts.layout')

@section('main')
<div class="row">
    <div class="col mb-4">
        <div class="card">
            <div class="card-body p-4">
                <div class="row">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User ID</th>
                                <th scope="col">Total Buku</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Tanggal Pemesanan</th>
                                <th scope="col">Ongkir</th>
                                <th scope="col">Metode Pembayaran</th>
                                <th scope="col">Status Pemesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listhistory as $list)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $list->user_id }}</td>
                                <td>{{ $list->totalBuku }}</td>
                                <td>{{ $list->totalHarga }}</td>
                                <td>{{ $list->tanggalPemesanan }}</td>
                                <td>{{ $list->ongkir }}</td>
                                <td>{{ $list->metodePembayaran }}</td>
                                <td>{{ $list->statusPemesanan }}</td>

                                {{-- <td>{{ $list->kategori->jenis_kategori }}</td> --}}
                                <td>
                                    <a href="" class="btn btn-warning text-dark">Detail Pemesanan</a>
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