<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Buku</title>
</head>
<body>
    <div class="container tabel">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Sinopsis</th>
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
                    <td>{{ $list->sinopsis }}</td>
                    <td>{{ $list->jumlah }}</td>
                    <td>{{ $list->harga }}</td>
                    <td>{{ $list->kategori_id }}</td>
                    <td>
                        <a href="updatedatabook/{{ $list->id }}" class="btn">Edit</a>
                        <a href="tablebook/{{ $list->id }}" class="btn" onclick="return confirm('yakin mau hapus')">Hapus</a>
                    </td>
                </tr>
                @endforeach
                <a href="createdatabook" class="btn btn-outline-primary rounded-pill tambah">Tambah Data</a>
            </tbody>
        </table>
    </div>
</body>
</html>