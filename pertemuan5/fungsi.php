<?php
function perkenalan($nama, $salam){
echo $salam.", "; 
echo "Perkenalkan, nama saya ". $nama. "<br/>"; 
echo "Senang bertemu dengan anda <br/>";

}

perkenalan("hamdana", "halo");

echo "<hr>";

$saya = "hanifah";
$ucapanSalam = "selamat pagi";

perkenalan($saya, $ucapanSalam);

//Fungsi yang Mengembalikan Nilai

function hitungUmur($thn_Lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_Lahir;
    return $umur;
}
echo "umur saya adalah ". hitungUmur(2004, 2024) ." tahun"
?>