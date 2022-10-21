<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Kategori</title>
</head>
<body>
    <div class="container tabel">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Jenis Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listkategori as $list)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $list->jenis_kategori }}</td>
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