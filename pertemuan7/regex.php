<?php

$pattern = '/[a-z]/'; 
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!<br>";
} else {
    echo "Tidak ada huruf kecil! <br>";
}

echo "<br>"; 

$pattern = '/[0-9]+/'; 
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan angka: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada angka yang cocok!<br>";
}

echo "<br>"; 


$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo "Teks setelah penggantian: " . $new_text . "<br>";
echo "<br>"; 


$pattern = '/go*d/'; 
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
$pattern = '/go?d/'; 
$text = 'gd is god.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}

$pattern = '/go{1,3}d/'; 
$text = 'god, good, gooood.';
if (preg_match_all($pattern, $text, $matches)) {
    echo "Cocokkan: " . implode(", ", $matches[0]) . "<br>"; 
} else {
    echo "Tidak ada yang cocok!<br>";
}
?>
