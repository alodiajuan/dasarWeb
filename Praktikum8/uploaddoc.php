<?php
if (isset($_POST['submit'])) {
    $targetDirectory="C:\Users\USER\Pictures\Uploads"; // direktori untuk menyimpan file
    $targetFile=$targetDirectory . basename($_FILES["fileToUpload"]["name"]);

    // $fileType= strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $documentType= strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Extensions yang diizinkan
    // $allowedExtensions=array("jpg", "jpeg", "png", "gif"); //untuk gambar
    $allowedExtensions=array("txt", "pdf", "doc", "docx"); // untuk dokumen

    $maxFileSize = 10*1024*1024; // ukuran maksimal file
    
    // memeriksa apakah file yang diunggah sesuai
    if (in_array($documentType, $allowedExtensions)&& $_FILES["fileToUpload"]["size"]<= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else{
            echo "Gagal mengunggah dokumen.";
        }
    } else{
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
    
}

?>