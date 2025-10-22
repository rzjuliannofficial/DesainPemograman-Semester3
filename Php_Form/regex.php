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


echo "--- Soal 5.3 (Penggantian Teks dengan preg_replace) ---<br>";
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: I like banana pie.
echo "<br><br>";


echo "--- Soal 5.4 (Kuantifier *) ---<br>";
$pattern = '/go*d/'; // Cocokkan "gd", "god", "good", "goood", dll. (0 atau lebih 'o')
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0]; // Output: Cocokkan: god (Kecocokan pertama)
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";


echo "--- Soal 5.5 (Kuantifier ?) ---<br>";
$pattern = '/go?d/';
$text = 'good is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0]; // Output: Cocokkan: god
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";


echo "--- Soal 5.6 (Kuantifier {n,m}) ---<br>";
$pattern = '/go{2,3}d/'; // Cocokkan "good" (2 'o') atau "goood" (3 'o'). (Min 2, Max 3 'o')
$text = 'goood is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0]; // Output: Cocokkan: goood
} else {
    echo "Tidak ada yang cocok!";
}
?>