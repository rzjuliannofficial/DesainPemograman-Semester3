<?php
//StudiKasus1
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
$jumlahSiswa = count($nilaiSiswa);
for ($i = 0; $i < $jumlahSiswa  - 1; $i++) {
    for ($j = 1; $j < $jumlahSiswa  - 1; $j++) {
        if ($nilaiSiswa[$j-1] > $nilaiSiswa[$j]) {
            // Swap the elements
            $temp = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $nilaiSiswa[$j-1];
            $nilaiSiswa[$j-1] = $temp;
        }
    }
}

foreach ($nilaiSiswa as $nilai) {
    echo "Nilai: $nilai <br>";
}

$totalNilai = 0;
for ($i = 2; $i < $jumlahSiswa - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}
echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah : {$totalNilai}<br>";

$rataRata = $totalNilai / 8;
echo "Rata-rata nilai: {$rataRata}<br>";