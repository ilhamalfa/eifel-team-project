<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>

    <form action="{{ url('customer') }}" method="POST">
        @csrf
        username : <input type="text" name="username"><br>
        @error('username')
            {{ $message }}<br>
        @enderror 
        nama : <input type="text" name="nama"><br>
        @error('nama')
            {{ $message }}<br>
        @enderror 
        email : <input type="email" name="email"><br>
        @error('email')
            {{ $message }}<br>
        @enderror 
        password : <input type="password" name="password"><br>
        @error('password')
            {{ $message }}<br>
        @enderror 
        Nomor Telp : <input type="number" name="nomortelp"><br>
        @error('number')
            {{ $message }}<br>
        @enderror 
        Jenis Kelamin : <select name="jenis_kelamin" id="jenis_kelamin">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        {{ $message }}<br>
                    @enderror 
        <button type="submit">Register</button>
    </form>
</body>
<script>
</script>
</html>