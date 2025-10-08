<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Errors = array(); // Array untuk menyimpan pesan kesalahan

    // Validasi Nama
    if (empty($nama)) {
        $Errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $Errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Errors[] = "Format email tidak valid.";
    }

    // Validasi Password (Minimal 8 Karakter)
    if (empty($password)) {
        $Errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $Errors[] = "Password minimal 8 karakter.";
    }

    // Jika ada kesalahan validasi
    if (!empty($Errors)) {
        // Tampilkan semua kesalahan
        foreach ($Errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama = " . htmlspecialchars($nama) . ", Email = " . htmlspecialchars($email) . ", Password = " . htmlspecialchars($password);
    }
} else {
    echo "Akses tidak sah.";
}
?>