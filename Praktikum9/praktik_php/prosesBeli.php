<?php
if(isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])){
    $beliNovel = $_POST["beliNovel"];
    $beliBuku = $_POST["beliBuku"];
    
    // Set cookie
    setcookie("beliNovel", $beliNovel, time() + 3600); // Cookie berlaku selama 1 jam
    setcookie("beliBuku", $beliBuku, time() + 3600); // Cookie berlaku selama 1 jam
    
    // Redirect ke halaman keranjang belanja
    header("location:keranjangBelanja.php");
} else {
    echo "Data form tidak lengkap.";
}
?>
