<?php

// Tentukan total poin yang dikumpulkan pemain
$poinPemain = 650; 

// Tampilkan baris pertama
echo "Total skor pemain adalah: " . $poinPemain . "<br>";

// Periksa apakah pemain mendapatkan hadiah tambahan
if ($poinPemain > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? (YA)<br>";
    echo "Pemain mendapat hadia tambahan!";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? (TIDAK)";
}

?>