<?php

$jumlahKursi = 45;
$kursiDitempati = 24;

$kursiKosong = $jumlahKursi - $kursiDitempati;
$hasil = ($kursiKosong / $jumlahKursi) * 100;

echo "Jumlah kursi kosong: {$kursiKosong} <br>";
echo "Presentase kursi kosong: {$hasil}  %";

?>
