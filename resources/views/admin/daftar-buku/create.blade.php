@extends('admin.asset.template')

@section('main')
    <div class="row">
        <div class="col mb-4">
            <div class="card">
                <div class="card-body p-4">
                    <h2 class="font-weight-bolder mb-3">Daftar Buku</h1>
                    <div class="row">
                        <form action="{{ url('buku') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control w-75 @error('judul') is-invalid @enderror" name="judul" id="judul" required>
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul">Penulis</label>
                                <input type="text" class="form-control w-75 @error('penulis') is-invalid @enderror" name="penulis" id="penulis" required>
                                @error('penulis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul">Penerbit</label>
                                <input type="text" class="form-control w-75 @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit" required>
                                @error('penerbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul">Sinopsis</label>
                                <input type="text" class="form-control w-75 @error('sinopsis') is-invalid @enderror" name="sinopsis" id="sinopsis" required>
                                @error('sinopsis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul">Jumlah</label>
                                <input type="text" class="form-control w-75 @error('jumlah') is-invalid @enderror" name="jumlah" id="jumlah" required>
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul">Harga</label>
                                <input type="text" class="form-control w-75 @error('harga') is-invalid @enderror" name="harga" id="harga" required>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul">Pilih Kategori</label>
                                <select name="kategori_id" id="" class="form-control w-75 @error('kategori_id') is-invalid @enderror">
                                    @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->jenis_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection