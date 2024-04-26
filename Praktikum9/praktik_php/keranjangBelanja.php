<html>
<head>  
</head>
<body>
    <h2>Keranjang Belanja</h2>

    <?php
    // Memeriksa apakah cookie beliNovel dan beliBuku telah disetel sebelum mencoba mengaksesnya
    if(isset($_COOKIE['beliNovel']) && isset($_COOKIE['beliBuku'])) {
        $beliNovel = $_COOKIE['beliNovel'];
        $beliBuku = $_COOKIE['beliBuku'];

        echo "Jumlah Novel: " . $beliNovel . "<br>";
        echo "Jumlah Buku: " . $beliBuku;
    } else {
        echo "Cookie tidak tersedia.";
    }
    ?>
</body>
</html>
