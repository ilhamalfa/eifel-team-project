@extends('admin.asset.template')

@section('main')
<div class="row">
    <div class="col mb-4">
        <div class="card">
            <div class="card-body p-4">
                <h3 class="font-weight-bolder mb-3">Edit Jenis Kategori</h3>
                    <div class="row">
                        <form action="{{ url('kategori/' . $kategori->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul">Jenis Kategori</label>
                                <input type="text" class="form-control" name="jenis_kategori" id="jenis_kategori" value="{{ $kategori->jenis_kategori }}" required>
                            </div>
                            <a href="{{ url('kategori') }}" class="btn btn-warning text-dark">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        {{-- <form action="{{ url('kategori') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="jenis_kategori">Jenis Kategori</label>
                                <input type="text" class="form-control" name="jenis_kategori" id="jenis_kategori" required>
                            </div>
                            <a href="{{ url('kategori') }}" class="btn btn-warning text-dark">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form> --}}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection