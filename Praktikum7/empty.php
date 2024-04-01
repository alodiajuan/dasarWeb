<?php
$nama = ""; //Variabel String kosong
if (empty($nama)) {
    echo "Nama tidak terdefinisi atau kosong.";
} else {
    echo "Nama terdefinisi dan tidak kosong.";
}

if(empty($nonExistentVar)) {
    echo "<br> Variabel tidak terdefinisi atau kosong.";
} else {
    echo "<br> Variabel terdefinisi dan tidak kosong.";
}
?> 