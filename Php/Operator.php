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
echo "Hasil a ** b = {$pangkat} <br><br>";

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
echo "Hasil a >= b ?: {$hasilLebihBesarSama}<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "Hasil a && b ?: {$hasilAnd}<br>";
echo "Hasil a || b ?: {$hasilOr}<br>";
echo "Hasil !a ?: {$hasilNotA}<br>";
echo "Hasil !b ?: {$hasilNotB}<br><br>";

$a += $b;
echo "Hasil a += b : {$a}<br>";
$a -= $b;
echo "Hasil a -= b : {$a}<br>";
$a *= $b;
echo "Hasil a *= b : {$a}<br>";
$a /= $b;
echo "Hasil a /= b : {$a}<br>";
$a %= $b;
echo "Hasil a %= b : {$a}<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Hasil a === b : {$hasilIdentik}<br>";
echo "Hasil a !== b : {$hasilTidakIdentik}<br><br>";

//studi kasus
$kursiTersedia = 45;
$kursiTidakKosong = 28;
$kursiKosong = $kursiTersedia - $kursiTidakKosong;

$presentaseKursiKosong = ($kursiKosong*100) / $kursiTersedia ;
echo "Presentase kursi kosong : {$presentaseKursiKosong}%";