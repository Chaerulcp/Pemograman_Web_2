<!DOCTYPE html>
<html>

<head>
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <h1>Form Mahasiswa</h1>
    <form method="post" action="proses.php">
        <label for="nama">Nama Mahasiswa:</label>
        <input type="text" id="nama" name="nama"> <br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim"><br>

        <label for="prodi">Prodi:</label>
        <select id="prodi" name="prodi">
            <option value="informatika">Informatika</option>
            <option value="pwk">PWK</option>
            <option value="teknik sipil">Teknik Sipil</option>
        </select><br>

        <label for="jk">Jenis Kelamin:</label>
        <input type="radio" id="laki-laki" name="jk" value="Laki-laki">
        <label for="laki-laki">Laki-laki</label>

        <input type="radio" id="perempuan" name="jk" value="Perempuan">
        <label for="perempuan">Perempuan</label><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"></textarea><br>

        <label for="kehadiran">Nilai Kehadiran:</label>
        <input type="number" id="kehadiran" name="kehadiran"><br>

        <label for="uts">Nilai UTS:</label>
        <input type="number" id="uts" name="uts"><br>

        <label for="uas">Nilai UAS:</label>
        <input type="number" id="uas" name="uas"><br>

        <label for="tugas">Nilai Tugas:</label>
        <input type="number" id="tugas" name="tugas"><br>

        <input type="submit" value="Hitung">
    </form>
</body>

</html>
