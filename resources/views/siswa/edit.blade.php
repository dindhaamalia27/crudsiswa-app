<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data siswa</title>
</head>
<body>
    <h1>Edit data siswa</h1>
    <p>Tambah Data Siswa</p>
    <a href="/">kembali</a>
    <img width="70" src="{{asset('storage/'.$datauser->photo)}}">
    <form action="/siswa/store"method="post"enctype="multipart/form-data">
        @csrf
    <div>
        <br>
        <label for="">kelas</label><br>
        <select name="kelas">
         @foreach ($clases as $clas)
            <option value="{{ $clas->id }}">{{ $clas->name }}</option>
        @endforeach
        </select><br>
           @error('kelas_id')
        <small style="color:red">{{$message}}</small>
        @enderror
    </div>
</br>
    <div>
        <label for="">Name</label>
        <br>
        <input type="text" name="name" value="{{$datauser->name}}">
        <br>
        @error('name')
        <small style="color:red">{{$message}}</small>
        @enderror

    </div>
    <br>
    <div>
        <label for="">Nisn</label>
        <br>
        <input type="text" name="nisn" value="{{$datauser->nisn}}">
        <br>
        @error('nisn')
        <small style="color:red">{{$message}}</small>
        @enderror
    </div>
</br>
    <div>
       <label for="">Alamat</label>
       <br>
        <input type="text" name="alamat" value="{{$datauser->alamat}}">
        <br>
        @error('alamat')
        <small style="color:red">{{$message}}</small>
        @enderror

    </div>
    <br>
    <div>
         <label for="">Email</label>
         <br>
        <input type="text" name="email" value="{{$datauser->email}}">
        <br>>
        <br>
        @error('email')
        <small style="color:red">{{$message}}</small>
        @enderror

    </div>
    <br>
    <div>
        <label for="">Password</label>
        <br>
        <input type="password" name="password">
        <small style= "color:green">abaikan jika tidak ingin di ubah</small>
        <br>
        @error('password')
        <small style="color:red">{{$message}}</small>
        @enderror

    </div>
    </br>
    <div>
        <label for="">No Handphone</label>
        <br>
        <input type="text" name="no_handphone" value="{{$datauser->no_handphone}}">
        <br>>
        <br>
        @error('no_handphone')
        <small style="color:red">{{$message}}</small>
        @enderror

    </div>
    <br>
    <div>
        <label for="">Photo</label>
        <input type="file" name="photo">
    </div>
    <br>
    <button type="submit">Simpan</button>
</body>
</html>
