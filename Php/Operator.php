<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil a + b = {$hasilTambah} <br>";
echo "Hasil a - b = {$hasilKurang} <br>";
echo "Hasil a * b = {$hasilKali} <br>";
echo "Hasil a / b = {$hasilBagi} <br>";
echo "Hasil a % b = {$sisaBagi} <br>";
echo "Hasil a ** b = {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil a == b ?: {$hasilSama} <br>";
echo "Hasil a != b ?: {$hasilTidakSama}<br>";
echo "Hasil a < b ?: {$hasilLebihKecil}<br>";
echo "Hasil a > b ?: {$hasilLebihBesar}<br>";
echo "Hasil a <= b ?: {$hasilLebihKecilSama}<br>";
echo "Hasil a >= b ?: {$hasilLebihBesarSama}<br>";
