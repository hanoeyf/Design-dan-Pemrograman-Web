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

perkenalan($saya,$ucapanSalam);
?>