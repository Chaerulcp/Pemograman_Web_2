<!DOCTYPE html>
<html>
<head>
	<title>Form Input PHP</title>
</head>
<body>
	<h2>Form Input</h2>
	<form method="POST" action="">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
		<label for="kelas">Kelas:</label>
		<input type="text" id="kelas" name="kelas"><br><br>
		<label for="alamat">Alamat:</label>
		<input type="text" id="alamat" name="alamat"><br><br>
		<input type="submit" value="Submit">
	</form>

	<?php
		// Cek apakah form telah disubmit
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Ambil data dari form
			$nama = $_POST["nama"];
			$kelas = $_POST["kelas"];
			$alamat = $_POST["alamat"];

			// Tampilkan data
			echo "<h2>Data yang diinput:</h2>";
			echo "Nama: " . $nama . "<br>";
			echo "Kelas: " . $kelas . "<br>";
			echo "Alamat: " . $alamat . "<br>";
		}
	?>
</body>
</html>
