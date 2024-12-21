<?php
include("config.php");

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$mata_pelajaran = $_POST['mata_pelajaran'];

$sql = "INSERT INTO calon_guru (id, nama, alamat, jenis_kelamin, agama, mata_pelajaran) 
        VALUES ('$id', '$nama', '$alamat', '$jenis_kelamin', '$agama', '$mata_pelajaran')";
$query = mysqli_query($db, $sql);

if (!$query) {
    die("Gagal menyimpan data: " . mysqli_error($db));
} else {
    header('Location: list-guru.php');
}
?>