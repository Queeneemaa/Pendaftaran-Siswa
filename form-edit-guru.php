<?php
include("config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM calon_guru WHERE id=$id";
$query = mysqli_query($db, $sql);
$guru = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan!");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Guru | SMK Coding</title>
</head>
<body>
    <h3>Form Edit Guru</h3>
    <form action="proses-edit-guru.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $guru['id'] ?>" />

        <label for="nama">Nama: </label>
        <input type="text" name="nama" value="<?php echo $guru['nama'] ?>" /><br><br>

        <label for="alamat">Alamat: </label>
        <textarea name="alamat"><?php echo $guru['alamat'] ?></textarea><br><br>

        <label for="jenis_kelamin">Jenis Kelamin: </label>
        <select name="jenis_kelamin">
            <option <?php if ($guru['jenis_kelamin'] == 'Laki-laki') echo "selected" ?>>Laki-laki</option>
            <option <?php if ($guru['jenis_kelamin'] == 'Perempuan') echo "selected" ?>>Perempuan</option>
        </select><br><br>

        <label for="agama">Agama: </label>
			<select name="agama">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Atheis</option>
			</select> <br><br>

        <label for="mata_pelajaran">Mata Pelajaran: </label>
			<select name="mata_pelajaran">
				<option>Matematika</option>
				<option>Biologi</option>
				<option>Kimia</option>
				<option>Fisika</option>
				<option>Bahasa Indonesia</option>
                <option>Bahasa Inggris</option>
			</select> <br><br>

        <input type="submit" value="Simpan" />
    </form>
</body>
</html>