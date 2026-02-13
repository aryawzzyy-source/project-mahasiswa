<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$foto = null;
if (!empty($_FILES['foto']['name'])) {
    $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    $foto = uniqid().'.'.$ext;
    move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/$foto");
}

$conn->query("INSERT INTO mahasiswa VALUES(
    NULL,'$nim','$nama','$email','$password','$foto'
)");

header("Location: list.php");
exit;
