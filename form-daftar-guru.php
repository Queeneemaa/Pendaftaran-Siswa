<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Guru | SMK Coding</title>
</head>
<body>
    <h3>Form Pendaftaran Guru</h3>
    <form action="proses-daftar-guru.php" method="POST">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" placeholder="Nama lengkap" required /><br><br>

        <label for="alamat">Alamat: </label>
        <textarea name="alamat" required></textarea><br><br>

        <label for="jenis_kelamin">Jenis Kelamin: </label>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
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

        <input type="submit" value="Daftar Guru" />
    </form>
</body>
</html>