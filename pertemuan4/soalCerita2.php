<?php
$harga = 120000;
$diskon = 0.2;
$totalBayar = 0;

if ($harga > 100000) {
    $totalBayar = $harga - ($harga * $diskon); 
} else {
    $totalBayar = $harga; 
}

echo "Harga yang harus dibayar adalah: Rp " . $totalBayar;
?>