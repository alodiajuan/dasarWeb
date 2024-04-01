<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Lowercase Letters</title>
</head>
<body>
    <h1>Check Lowercase Letters</h1>
    <form method="post">
        <label for="text">Masukkan Teks:</label><br>
        <input type="text" id="text" name="text"><br>
        <input type="submit" value="Check">
    </form>

    <?php
    // Memeriksa apakah ada input dari pengguna
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan teks yang dimasukkan oleh pengguna
        $text = $_POST['text'];

        // Memeriksa apakah ada huruf kecil dalam teks
        if (preg_match('/[a-z]/', $text)) {
            echo "Huruf kecil ditemukan!";
        } else {
            echo "Tidak ada huruf kecil!";
        }

        // Memeriksa keberadaan digit dalam teks
        $pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit
        if (preg_match($pattern, $text, $matches)) {
            echo "<br>Cocokkan: " . $matches[0];
        } else {
            echo "<br>Tidak ada yang cocok!";
        }

        // Mengganti "apple" dengan "banana" dalam teks
        $pattern_replace = '/apple/';
        $replacement = 'banana';
        $new_text = preg_replace($pattern_replace, $replacement, $text);
        echo "<br>Setelah penggantian: " . $new_text;

        // Mencocokkan pola "go*d"
        $pattern_god = '/go*d/';
        if (preg_match($pattern_god, $text, $matches_god)) {
            echo "<br>Cocokkan: " . $matches_god[0];
        } else {
            echo "<br>Tidak ada yang cocok!";
        }
    }
    ?>
</body>
</html>
