@extends('layouts.app')
@section('tittle')
<tittle>create clas</tittle>
@endsection
@section('content')
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
 @endsection
