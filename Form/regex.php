<?php
echo "--- Soal 5.1 (Pencocokan Huruf Kecil) ---<br>";

$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan";
}else {
    echo "Tidak ada huruf kecil!";
}
echo "<br><br>";

echo "--- Soal 5.2 (Pencocokan Digit dengan Kuantifier +) ---<br>";
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) { 
    echo "Cocokkan: " . $matches[0]; // Output: Cocokkan: 123
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";
