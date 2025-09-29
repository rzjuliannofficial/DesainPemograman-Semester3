<?php
    $pesan = "Saya arek malang";
    echo strrev($pesan) . "<br><br>";

    #ubah variabel $pesan menjadi array dengan perintah explode
    $pesanPerKata = explode(" ", $pesan);
    
    #ubah setiap kata dalam array menjadi kebalikannya
    $pesanPerKata = array_map(fn($kata) => strrev($kata), $pesanPerKata);
    
    #gabungkan kembali array menjadi string
    $pesan = implode(" ", $pesanPerKata);
    echo $pesan . "<br>";
?>