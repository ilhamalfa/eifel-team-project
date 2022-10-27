@extends('customer.layouts.layout')

@section('main')
<div class="container">            
    <form action="{{ url('checkout') }}" method="POST">
    @csrf
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>#</th>
                <th>Judul</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

                @foreach ($carts as $cart)
                <tr>
                    <td><input type="checkbox" name="item[]" id="item[]" value="{{ $cart->id }}"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cart->buku->judul }}</td>
                    <td>{{ $cart->jumlah }}</td>
                    <td>{{ $cart->harga }}</td>
                    <td>
                        {{-- <form action="{{ url('customer/cart/'. $cart->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Hapus</button>
                        </form> --}}
                        {{-- <a href="/customer/cart/delete/{{ $cart->id }}" class="btn" onclick="return confirm('yakin mau hapus')">Hapus</a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Check-out</button>
            </div>
        </div>
    </form>
</div>
@endsection