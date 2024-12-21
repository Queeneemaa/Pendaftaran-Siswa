<?php require('fpdf186/fpdf.php');
include 'config.php'; // Pastikan file koneksi sudah benar

// Definisikan query dan jalankan
$sql = "SELECT * FROM calon_siswa";
$query = mysqli_query($db, $sql); // Gunakan $connect karena itu nama koneksi yang digunakan di config.php

// Buat objek PDF
$pdf = new FPDF('L', 'mm', 'A5');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 7, 'Laporan Data Siswa', 0, 1, 'C');
$pdf->Ln(10);

// Header tabel
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 8, 'Nama', 1, 0, 'C');
$pdf->Cell(50, 8, 'Alamat', 1, 0, 'C');  // Ubah lebar kolom untuk Alamat
$pdf->Cell(30, 8, 'Jenis Kelamin', 1, 0, 'C'); // Ubah lebar kolom untuk Jenis Kelamin
$pdf->Cell(30, 8, 'Agama', 1, 0, 'C');  // Ubah lebar kolom untuk Agama
$pdf->Cell(50, 8, 'Sekolah Asal', 1, 1, 'C');  // Ubah lebar kolom untuk Sekolah Asal

// Isi tabel
$pdf->SetFont('Arial', '', 10);
if (!$query) {
    die("Query gagal: " . mysqli_error($connect)); // Periksa jika query gagal
}

while ($row = mysqli_fetch_array($query)) { // Gunakan hasil dari $query
    $pdf->Cell(30, 8, $row['nama'], 1, 0, 'C');
    $pdf->Cell(50, 8, $row['alamat'], 1, 0, 'L'); // Ubah lebar kolom untuk Alamat
    $pdf->Cell(30, 8, $row['jenis_kelamin'], 1, 0, 'C'); // Ubah lebar kolom untuk Jenis Kelamin
    $pdf->Cell(30, 8, $row['agama'], 1, 0, 'C');  // Ubah lebar kolom untuk Agama
    $pdf->Cell(50, 8, $row['sekolah_asal'], 1, 1, 'C'); // Ubah lebar kolom untuk Sekolah Asal
}

// Output PDF
$pdf->Output();

?>