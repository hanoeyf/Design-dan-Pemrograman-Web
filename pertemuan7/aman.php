<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>

<!-- Form untuk input -->
<form method="POST" action="">
    <label for="input">Masukkan teks:</label><br>
    <input type="text" id="input" name="input" required><br><br>
    <input type="submit" value="Kirim">
</form>

<?php
// Mengecek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['input'])) {
    // Mengambil dan mengamankan input dari form
    $input = $_POST['input'];
    
    // Mencegah XSS dengan htmlspecialchars
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    
    // Menampilkan hasil input yang sudah diamankan
    echo "Input yang diamankan: " . $input;
}
?>

</body>
</html>
