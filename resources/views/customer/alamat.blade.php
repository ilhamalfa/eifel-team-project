@extends('customer.layouts.layout')

@section('main')
<form action="{{ url('alamat') }}" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <select class="form-control" id="provinces" name="provinces" onchange="daerah(id, value)">
        </select>
    </div>
    
    <div class="form-floating mb-3">
        <select class="form-control" id="regencies" name="regencies" onchange="daerah(id, value)">
        </select>
    </div>
    
    <div class="form-floating mb-3">
        <select class="form-control" id="districts" name="districts" onchange="daerah(id, value)">
        </select>
    </div>
    
    <div class="form-floating mb-3">
        <select class="form-control" id="villages" name="villages">
        </select>
    </div>
    <button type="submit">simpan</button>
</form>
@endsection