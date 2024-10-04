<?php
$pesan = "Saya arek Malang";
echo strrev($pesan) . "<br>";

$pesan = "Saya arek Malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerkata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode("", $pesanPerKata);
echo $pesan. "<br>";
?>