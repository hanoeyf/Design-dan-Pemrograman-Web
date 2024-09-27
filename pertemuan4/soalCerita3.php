<?php
$poin = 550;
$hadiahTambahan = "TIDAK"; 


if ($poin > 500) {
    $hadiahTambahan = "YA"; 
}

echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan . "\n";
?>
