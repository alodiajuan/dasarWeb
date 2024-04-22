<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "C:\Users\USER\Pictures\Uploads";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $filType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg","jpeg","png","gif");

    $maxfileSize = 5 * 1024 * 1024;

    if (in_array($filType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxfileSize){
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
            echo"FIle berhasil diunggah<br>";
            echo"Thumbnail : <br>";
            echo '<img src="'.$targetFile.'"width="200" alt="Thumbnail">';
        }
        else{
            echo "Gagal mengunggah file";
        }
    }
    else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}

?>