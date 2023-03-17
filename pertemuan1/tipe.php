<?php
$nim = "D0221509";
$nama = 'Chaerul';
$umur = 21;
$nilai = 90.25;
$status = TRUE;

echo "NIM : " . $nim . "<br>";
echo "NAMA : " . $nama . "<br>";
print "Umur : " . $umur . "<br>";
printf("Nilai : %.3f<br>", $nilai );
if ($status) 
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";    



?>