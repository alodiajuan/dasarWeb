<?php
if (isset($_FILES['files']['name'][0])) {
    $errors = array();

    foreach ($_FILES['files']['name'] as $key => $file_name) {
        $file_size = $_FILES['files']['size'][$key]; 
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");

        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "Hanya file gambar dengan ekstensi JPG, JPEG, PNG, atau GIF yang diizinkan.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file ' . $file_name . ' tidak boleh lebih dari 2MB';
        }

        if (empty($errors)) {
            $destination = "documents/" . $file_name;
            if (move_uploaded_file($file_tmp, $destination)) {
                echo "File $file_name berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah File: $file_name<br>";
            }
        } else {
            echo implode("<br>", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
