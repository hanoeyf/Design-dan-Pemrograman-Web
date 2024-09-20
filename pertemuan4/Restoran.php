<?php

$kursi = 45;
$kursiDipakai = 28;
$sisaKursi = $kursi - $kursiDipakai;
$persentaseKursiKosong = ($sisaKursi / $kursi) * 100;

echo "Sebuah restoran memiliki 45 kursi di dalamnya. 
Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. <br> Berapa 
persen kursi yang masih kosong di restoran tersebut?" 
. "<br>". "jawabannya adalah: " . $persentaseKursiKosong;

?>