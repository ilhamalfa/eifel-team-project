<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Buku</title>
</head>
<body>
    <a href="tablebook" class="btn">Kembali</a>
    <form action="/tablebook/{{ $buku->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" value="{{ $buku->judul }}" required>
        </div>
        <div class="mb-3">
            <label for="judul">Penulis</label>
            <input type="text" class="form-control" name="penulis" id="penulis" value="{{ $buku->penulis }}" required>
        </div>
        <div class="mb-3">
            <label for="judul">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" value="{{ $buku->penerbit }}" required>
        </div>
        <div class="mb-3">
            <label for="judul">Sinopsis</label>
            <input type="text" class="form-control" name="sinopsis" id="sinopsis" value="{{ $buku->sinopsis }}" required>
        </div>
        <div class="mb-3">
            <label for="judul">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{ $buku->jumlah }}" required>
        </div>
        <div class="mb-3">
            <label for="judul">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{ $buku->harga }}" required>
        </div>
        <div class="mb-3">
            <label for="judul">Pilih Kategori</label>
            <select name="kategori_id" id="" class="form-control">
                <option value="{{ $buku->kategori->id }}">{{ $buku->kategori->jenis_kategori }}</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->jenis_kategori }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>