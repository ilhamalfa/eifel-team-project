<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <a href="/export" class="btn btn-outline-primary rounded-pill">Download Excel</a>
        <table class="table text-center" id="table-datatables">
            <thead>
                <tr>
                    <th scope="col">No</th>
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
                @foreach ($data as $li)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $li->user_id }}</td>
                        <td>{{ $li->totalBuku }}</td>
                        <td>{{ $li->totalHarga }}</td>
                        <td>{{ $li->tanggalPemesanan }}</td>
                        <td>{{ $li->ongkir }}</td>
                        <td>{{ $li->metodePembayaran }}</td>
                        <td>{{ $li->statusPemesanan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>