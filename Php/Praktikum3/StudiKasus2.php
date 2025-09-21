<?php

$hargaProduk = 120000;
$diskon = 0.20; // 20% dalam format desimal
$minimalHargaDiskon = 100000;
$hargaFinal = 0;

// Hitung harga setelah diskon
if ($hargaProduk > $minimalHargaDiskon) {
    $hargaFinal = $hargaProduk - ($hargaProduk * $diskon);
}

echo "Harga yang harus dibayar pelanggan adalah: Rp " . $hargaFinal;

?>