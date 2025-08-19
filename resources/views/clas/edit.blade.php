@extends('layouts.app')
@section('tittle')
<tittle>edit clas</tittle>
@endsection
@section('content')
    <h1>Edit data kelas</h1>
    <form action="{{ route('clas.update', $clas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>nama kelas:</label><br>
        <input type="text" name="name" value="{{ $clas->name }}" ><br>
        @error('name')
        <small style="color:red">{{$message}}</small><br>
        @enderror

        <label>Deskripsi</label><br>
        <textarea name="description" rows="4" cols="50">{{ $clas->description }}</textarea><br>
        @error('description')
        <small style="color:red">{{$message}}</small>
    @enderror
        <button type="submit">Update</button>
        <a href="{{ route('clas.index') }}">Batal</a>
    </form>
 @endsection
