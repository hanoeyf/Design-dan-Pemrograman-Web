<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];


$panjangArray = 10; 


for ($i = 0; $i < $panjangArray - 1; $i++) {
    for ($j = 0; $j < $panjangArray - 1 - $i; $j++) {
        if ($nilaiSiswa[$j] > $nilaiSiswa[$j + 1]) {
          
            $temp = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $nilaiSiswa[$j + 1];
            $nilaiSiswa[$j + 1] = $temp;
        }
    }
}


$total_nilai = 0;
for ($i = 2; $i < $panjangArray - 2; $i++) {
    $total_nilai += $nilaiSiswa[$i];
}


$rata_rata = $total_nilai / 6; 


echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $total_nilai <br>"  ;
echo "Nilai rata-rata setelah mengabaikan nilai dua tertinggi dan terendah: " . $rata_rata . "\n";

?>
