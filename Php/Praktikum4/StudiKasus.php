<?php

$daftarNilaiMatematika = [
    ['Alice' , 85],
    ['Bob' , 92],
    ['Charlie' , 78],
    ['David' , 64],
    ['Eva' , 90],
];

$daftarSiswaDiAtasRata = [];
$total = 0;

foreach ($daftarNilaiMatematika as $nilai) {
    $total += $nilai[1];
}

$rataRata = $total / count($daftarNilaiMatematika);
echo "Rata-rata : {$rataRata}<br><br>";

foreach ($daftarNilaiMatematika as $nilai) {
    if($nilai[1] > $rataRata){
        $daftarSiswaDiAtasRata[] = $nilai[0];
    }
}

echo "Daftar siswa yang nilainya di atas rata-rata : ". implode(', ',$daftarSiswaDiAtasRata);