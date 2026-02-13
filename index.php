<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Tambah Data Mahasiswa</h2>

<form action="proses_simpan.php" method="POST" enctype="multipart/form-data">
    <label>NIM</label>
    <input type="text" name="nim" required>

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Foto</label>
    <input type="file" name="foto" accept="image/*" required>

    <button type="submit">Simpan</button>
</form>

<a href="list.php">Lihat Data</a>
</div>

</body>
</html>
