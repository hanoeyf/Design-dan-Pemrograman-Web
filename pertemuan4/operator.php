<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: " . $hasilTambah . "<br>";
echo "Hasil Kurang: " . $hasilKurang . "<br>";
echo "Hasil Kali: " . $hasilKali . "<br>";
echo "Hasil Bagi: " . $hasilBagi . "<br>";
echo "Hasil Sisa Bagi: " . $sisaBagi . "<br>";
echo "Hasil Pangkat: " . $pangkat . "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: " . $hasilSama . "<br>";
echo "Hasil Tidak Sama: " . $hasilTidakSama . "<br>";
echo "Hasil Lebih Kecil: " . $hasilLebihKecil . "<br>";
echo "Hasil Lebih Besar: " . $hasilLebihBesar . "<br>";
echo "Hasil Lebih Kecil Sama dengan: " . $hasilLebihKecilSama . "<br>";
echo "Hasil Lebih Besar Sama dengan: " . $hasilLebihBesarSama . "<br>";

$hasilAND = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: " . $hasilAND . "<br>";
echo "Hasil OR: " . $hasilOr . "<br>";
echo "Hasil Not A: " . !$a . "<br>";
echo "Hasil Not B: " . !$b . "<br>";

$a += $b;
echo "\$a += \$b; Hasil: " . $a . "<br>";

$a -= $b;
echo "\$a -= \$b; Hasil: " . $a . "<br>";

$a *= $b;
echo "\$a *= \$b; Hasil: " . $a . "<br>";

$a /= $b;
echo "\$a /= \$b; Hasil: " . $a . "<br>";

$a %= $b;
echo "\$a %= \$b; Hasil: " . $a . "<br>";

?>