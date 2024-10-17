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

    <label for="email">Masukkan email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Kirim">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['input'])) {
    
    $input = $_POST['input'];

    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    echo "Input yang diamankan: <br>" . $input;
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<br>Email yang valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "<br>";
    } else {
        echo "Email tidak valid. Harap masukkan email yang benar.<br>";
    }
}

?>

</body>
</html>
