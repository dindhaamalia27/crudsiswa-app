<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data clas</title>
</head>
<body>
    <h2>tambah data kelas</h2>
    <a href="{{route('clas.index')}}">kembali</a>
    <br><br>

    <form action="{{ route('clas.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Name</label>
        <br>
        <input type="text" name="name">
        <br>
        @error('name')
        <small style="color:red">{{$message}}</small>
        @enderror
    </div>
    <label for="description">Description</label><br>
    <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>
    @error('description')
        <small style="color:red">{{$message}}</small>
    @enderror
    <button type="submit">Simpan</button>
</form>

</body>
</html>
