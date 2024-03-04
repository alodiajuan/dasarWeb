<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai Huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>";
echo "<br>";
echo "Atlet tersebut memerlukan $hari untuk mencapai jarak 500 kilometer";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br>";
echo "<br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian  as $skor) {
    $totalSkor += $skor;
}

echo  "<br>";
echo  "<br>";
echo "Total skor ujian adalah: $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
echo  "<br>";
echo  "<br>";

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai_siswa);
$nilai_siswa = array_slice($nilai_siswa, 2, -2);
$total_nilai = array_sum($nilai_siswa);
$rata_rata = $total_nilai / count($nilai_siswa);

echo  "<br>";
echo "Total nilai siswa setelah mengabaikan nilai tertinggi dan terendah: " . $total_nilai . "<br>";
echo "Rata-rata nilai siswa setelah mengabaikan nilai tertinggi dan terendah: " . $rata_rata;
echo "<br>";

$hargaProduk = 120000;
$diskon = 20;
$syaratDiskon = 100000;

if ($hargaProduk > $syaratDiskon) {
    $besarDiskon = $hargaProduk * ($diskon / 100);
    $hargaSetelahDiskon = $hargaProduk - $besarDiskon;
    echo  "<br>";
    echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp" . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";
} else {
    echo  "<br>";
    echo "Tidak mendapatkan diskon. Harga yang harus dibayar: Rp" . number_format($hargaProduk, 0, ',', '.') . "<br>";
}

$skorPemain = 700;
$hadiahTambahan = ($skorPemain > 500) ? "YA" : "TIDAK";

echo  "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";

?>