<?php

$loremIpsum = "Di bagian ini, dijelaskan hasil simulasi dari penelitian yang sebaiknya disajikan dalam bentuk gambar, tabel, ataupun grafik agar lebih jelas dan komunikatif.
Analisis yang dilakukan berfokus pada hasil yang diperoleh, tidak perlu sampai pada analisis penyelesaian.
Intinya, jelaskan kenapa diperoleh hasil seperti itu, apakah sudah sesuai dengan tujuan yang diinginkan atau belum.";

echo "<p> {$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: "  . str_word_count($loremIpsum) . "<br>";
echo "<p>" .strtoupper($loremIpsum). "</p>";
echo "<p>" .strtoupper($loremIpsum). "</p>";

?>