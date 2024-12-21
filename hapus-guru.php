<?php
include("config.php");

$id = $_GET['id'];
$sql = "DELETE FROM calon_guru WHERE id=$id";
$query = mysqli_query($db, $sql);

if ($query) {
    header('Location: list-guru.php');
} else {
    die("Gagal menghapus data...");
}
?>