<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ auth()->user()->name }} <br>
    Total Harga : {{ $total }}<br>
    <table>
        <thead>
            <tr>
                <th>Check</th>
                <th>#</th>
                <th>Judul</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ url('checkout') }}" method="POST">
                @csrf
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
                <button type="submit">Check-out</button>
            </form>
        </tbody>
    </table>
</body>
</html>