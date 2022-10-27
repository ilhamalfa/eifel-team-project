<form action="{{ url('alamat') }}" method="POST">
    @csrf
    <select name="provinsi" id="provinsi">
        <option value="">Pilih Alamat</option>
        @foreach ($provinsi as $prov)
            <option value="{{ $prov['id'] }}">{{ $prov['name'] }}</option>
        @endforeach
    </select>
    <div class="form-group">
        <label>Kab/Kota:</label><br />
        <select name="kota" id="kota">
            <option>Pilih</option>
        </select>
    </div>
    <div class="form-group">
        <label>Kecamatan:</label><br />
        <select name="kecamatan" id="kecamatan">
            <option>Pilih</option>
        </select>
    </div>
    <div class="form-group">
        <label>Kelurahan:</label><br />
        <select name="kelurahan" id="kelurahan">
            <option>Pilih</option>
        </select>
    </div>
    <button type="submit">submit</button>
</form>

<script>
    
</script>