<?php

$host = "localhost";
$username = "root"; // Sesuaikan dengan username MySQL Anda (default XAMPP: root)
$password = ""; // Sesuaikan dengan password MySQL Anda (default XAMPP: kosong)
$database = "prakwebdb"; // Nama database yang dibuat pada praktikum sebelumnya [cite: 57]

// Membuat koneksi ke database
$connect = mysqli_connect($host, $username, $password, $database);

// Mengecek apakah koneksi berhasil atau gagal
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// Tidak ada output jika koneksi berhasil


// $query = "CREATE TABLE user (
//     id INT(11) NOT NULL PRIMARY KEY,
//     username VARCHAR(50) NOT NULL,
//     password VARCHAR(50) NOT NULL
// )";
// mysqli_query($connect, $query);

// $query = "INSERT INTO user (id, username, password) VALUES (1, 'admin', MD5('123'))";
// mysqli_query($connect, $query);
?>