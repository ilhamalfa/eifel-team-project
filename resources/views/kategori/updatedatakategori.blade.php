<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Kategori</title>
</head>
<body>
    <a href="tablekategori" class="btn">Kembali</a>
    <form action="/tablekategori/{{ $kategori->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul">Jenis Kategori</label>
            <input type="text" class="form-control" name="jenis_kategori" id="jenis_kategori" value="{{ $kategori->jenis_kategori }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>