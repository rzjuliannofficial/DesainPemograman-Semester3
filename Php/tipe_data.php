<?php
$a = 10;
$b = 5;
$c = $a + 5 ;
$d = $b +(10 * 5);
$e = $d - $c;

echo "Variable a: {$a} <br>";
echo "Variable b: {$b} <br>";
echo "Variable b: {$c} <br>";
echo "Variable b: {$d} <br>";
echo "Variable b: {$e} <br>";

var_dump($e);

$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan.' '.$namaBelakang;

echo "<br> Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;

$listMahasiswa = ["Wahid Abdullah" , "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>