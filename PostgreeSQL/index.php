<?php

// --- KONFIGURASI KONEKSI POSTGRESQL ---
$host   = 'localhost';
$port   = '5432';
$dbname = 'PhpDatabase';
$user   = 'postgres';
$pass   = '123';

// Membuat koneksi
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$conn) {
    // Jika koneksi gagal, hentikan eksekusi dan tampilkan pesan error PostgreSQL
    die('Koneksi gagal: ' . pg_last_error());
}

// Set encoding (opsional tapi dianjurkan)
pg_set_client_encoding($conn, 'UTF8');

// Ambil data dari tabel mahasiswa
// Menggunakan alias (AS) agar nama kolom tetap berformat PascalCase saat diambil
$sql = "SELECT 
    \"Nim\"      AS \"Nim\",
    \"Nama_Mhs\"     AS \"Nama\",
    \"Email\"    AS \"Email\",
    \"Jurusan\"  AS \"Jurusan\"
FROM \"TB_Mahasiswa\"
ORDER BY \"Nim\"";

$result = pg_query($conn, $sql);

if (!$result) {
    // Jika query gagal, hentikan eksekusi dan tampilkan pesan error PostgreSQL
    die('Query gagal: ' . pg_last_error($conn));
}

// Lanjutkan ke bagian HTML/tampilan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa PostgreSQL</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1; ?>
        <?php while ($row = pg_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo htmlspecialchars($row["Nim"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($row["Nama"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($row["Email"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($row["Jurusan"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td>
                <a href="Edit.php?nim=<?php echo urlencode($row["Nim"]); ?>">Edit</a> | 
                <a href="Hapus.php?nim=<?php echo urlencode($row["Nim"]); ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
    
    <?php
    // Bebaskan hasil query dari memori
    pg_free_result($result);
    // Tutup koneksi ke database
    pg_close($conn);
    ?>

</body>
</html>