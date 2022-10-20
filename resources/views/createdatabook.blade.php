<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Buku</title>
</head>
<body>
    <a href="tablebook" class="btn">Kembali</a>
    <form action="tablebook" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" required>
        </div>
        <div class="mb-3">
            <label for="judul">Penulis</label>
            <input type="text" class="form-control" name="penulis" id="penulis" required>
        </div>
        <div class="mb-3">
            <label for="judul">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" required>
        </div>
        <div class="mb-3">
            <label for="judul">Sinopsis</label>
            <input type="text" class="form-control" name="sinopsis" id="sinopsis" required>
        </div>
        <div class="mb-3">
            <label for="judul">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" required>
        </div>
        <div class="mb-3">
            <label for="judul">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" required>
        </div>
        <div class="mb-3">
            <label for="judul">Pilih Kategori</label>
            <select name="kategori_id" id="" class="form-control">
                @foreach ($kategori as $item)
                <option value="{{ $item->id }}">{{ $item->jenis_kategori }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>