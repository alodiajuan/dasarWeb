<?php
$a = 10;
$b = 5;

$hasilTambah = $a +$b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil tambah: {$hasilTambah} <br>";
echo "Hasil kurang: {$hasilKurang} <br>";
echo "Hasil kali: {$hasilKali} <br>";
echo "Hasil bagi: {$hasilBagi} <br>";
echo "Hasil pangkat: {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
 
echo "<br>";
echo "Hasil sama: " . ($hasilSama ? 'True' : 'False') . "<br>";
echo "Hasil tidak sama: " . ($hasilTidakSama ? 'True' : 'False') . "<br>";
echo "Hasil lebih kecil: " . ($hasilLebihKecil ? 'True' : 'False') . "<br>";
echo "Hasil lebih besar: " . ($hasilLebihBesar ? 'True' : 'False') . "<br>";
echo "Hasil lebih kecil sama: " . ($hasilLebihKecilSama ? 'True' : 'False') . "<br>";
echo "Hasil lebih besar sama: " . ($hasilLebihBesarSama ? 'True' : 'False') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB =  !$b;

echo "<br>";
echo "Hasil AND: " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil OR: " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil NotA: " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil NotB: " . ($hasilNotB ? 'True' : 'False') . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br>";
echo "Hasil a += b: " . ($a ? 'True' : 'False') . "<br>";
echo "Hasil a-= b: " . ($a ? 'True' : 'False') . "<br>";
echo "Hasil a *=: " . ($a ? 'True' : 'False') . "<br>";
echo "Hasil a /= b: " . ($a ? 'True' : 'False') . "<br>";
echo "Hasil a %= b: " . ($a ? 'True' : 'False') . "<br>";

$hasilIdentik = $a == $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Hasil identik: " . ($hasilIdentik ? 'True' : 'False') . "<br>";
echo "Hasil tidak identik: " . ($hasilTidakIdentik ? 'True' : 'False') . "<br>";

?>