<?php

$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika key-nya kososng
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan error ketika key-nya kososng

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>