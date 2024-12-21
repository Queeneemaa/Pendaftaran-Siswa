<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Guru | SMK Coding</title>
</head>
<body>
    <h3>Daftar Guru</h3>
    <nav>
        <a href="form-daftar-guru.php">[+] Tambah Baru</a>
    </nav>
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Mata Pelajaran</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mendapatkan data dari tabel calon_guru
            $sql = "SELECT * FROM calon_guru";
            $query = mysqli_query($db, $sql);

            $no = 1;
            while ($guru = mysqli_fetch_array($query)) {
                echo "<tr>";

                // Menampilkan data guru dalam tabel
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $guru['nama'] . "</td>";
                echo "<td>" . $guru['alamat'] . "</td>";
                echo "<td>" . $guru['jenis_kelamin'] . "</td>";
                echo "<td>" . $guru['agama'] . "</td>";
                echo "<td>" . $guru['mata_pelajaran'] . "</td>";

                // Tombol tindakan edit dan hapus
                echo "<td>";
                echo "<a href='form-edit-guru.php?id=" . $guru['id'] . "'>Edit</a> | ";
                echo "<a href='hapus-guru.php?id=" . $guru['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>