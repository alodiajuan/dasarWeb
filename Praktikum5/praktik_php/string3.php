<?php
$pesan = "Saya arek Malang";
#ubah variabel menjadi array dengan perintah explode
$pesanPerKata = explode( " ", $pesan ); 
#ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
#gabungkan kemnbali array menjadi String
$pesan = implode( " ", $pesanPerKata);

echo "$pesan";
?>