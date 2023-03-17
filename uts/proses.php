<?php

//menerima data form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$kehadiran = $_POST['kehadiran'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];

//menghitung nilai akhir
$nilai_akhir = ($kehadiran + $uts + $uas + $tugas) / 4;

//menentukan nilai huruf
if ($nilai_akhir >= 85) {
    $nilai_huruf = "A";
} elseif ($nilai_akhir >= 75) {
    $nilai_huruf = "B";
} elseif ($nilai_akhir >= 60) {
    $nilai_huruf = "C";
} elseif ($nilai_akhir >= 50) {
    $nilai_huruf = "D";
} else {
    $nilai_huruf = "E";
}

//menampilkan Biodata dan nilai

echo "<h1>Infrmasi Mahasiswa </h1>";
echo "Nama Mahasiswa: ".$nama."<br>";
echo "NIM: ".$nim."<br>";
echo "Prodi: ".$prodi."<br>";
echo "Jenis Kelamin: ".$jk."<br>";
echo "Alamat: ".$alamat."<br>"."<hr>";
echo "<h1>Nilai Mahasiswa</h1>";
echo "Total Nilai:". $nilai_akhir. "<br>";
echo "Nilai Huruf: ".$nilai_huruf."<br>";

?>

