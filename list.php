<?php
include 'koneksi.php';
$result = $conn->query("SELECT * FROM mahasiswa ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<div class="header">
    <h2>Data Mahasiswa</h2>
    <a href="index.php" class="btn-add">+ Tambah Data</a>
</div>

<table>

<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Foto</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while($row=$result->fetch_assoc()): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= htmlspecialchars($row['nim']) ?></td>
    <td><?= htmlspecialchars($row['nama']) ?></td>
    <td><?= htmlspecialchars($row['email']) ?></td>
    <td>
        <?php if($row['foto']): ?>
            <img src="uploads/<?= htmlspecialchars($row['foto']) ?>">
        <?php else: ?>
            -
        <?php endif; ?>
    </td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>
