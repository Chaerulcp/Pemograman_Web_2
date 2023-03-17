<?php
  $gaji = 800000;
  $besaran_pajak = 40000;
  $jumlah_anak = 2;
  
  if ($jumlah_anak > 0) {
    $tunjangan_anak = 50000 * $jumlah_anak;
  } else {
    $tunjangan_anak = 0;
  }
  
  $total_gaji = $gaji + $tunjangan_anak - $besaran_pajak;
  
  echo "Total gaji yang diterima adalah Rp" . number_format($total_gaji, 0, ",", ".");
?>
