<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Halaman Beranda</h1>

        <div class="list-data-siswa">
            <h2>List Data Siswa</h2>
            <a href="siswa/create">Tambah</a>
            <table border="1">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Name</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th colspan="3">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>foto.jpg</td>
                        <td>Dindha</td>
                        <td>XI PPL 2</td>
                        <td>Jl. abc</td>
                        <td class="option-links">
                        <a href="#">Hapus</a>
                        <a href="#">edit</a>
                        <a href="#">detail</a>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
</body>
</html>
