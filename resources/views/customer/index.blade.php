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
    Cart : <a href="{{ url('customer/cart/') }}">{{ $cart}} </a> Item(s)
    {{-- cart : <a href="{{ url('customers/cart') }}">{{ $cart }} </a><br> --}}
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $buku)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->jumlah }}</td>
                <td>{{ $buku->harga }}</td>
                <td>
                    
                    {{-- @if ($buku->id == $cart1)
                        Sudah Masuk Keranjang
                    @endif --}}
                    <form action="{{ url('customer/cart/store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $buku->id }}">
                        <input type="number" name="qty" id="qty" min="1" max="{{ $buku->jumlah }}" value="1">
                        <button type="submit">Add To Cart</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>