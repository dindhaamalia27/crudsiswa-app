<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" a href="{{asset('assets/style.css')}}">
    @yield('cssinternal')
</head>
<body>
  <div>
    <a href="/">Menu siswa</a>
    |
    <a href="/clas">Menu kelas</a>
  </div>
  <hr>
  @yield('content')
</body>
</html>
