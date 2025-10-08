<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari select (dropdown)
        $selectedBuah = $_POST['buah'];

        // Cek apakah checkbox 'warna' dipilih (PENTING: Gunakan isset untuk checkbox/array POST opsional)
        if (isset($_POST['warna'])) {
            $selectedWarna = $_POST['warna']; // Akan berupa array jika lebih dari 1 dipilih
        } else {
            $selectedWarna = []; // Tetapkan array kosong jika tidak ada yang dipilih
        }

        // Ambil nilai dari radio button
         if (isset($_POST['jenis_kelamin'])) {
            $selectedJenisKelamin = $_POST['jenis_kelamin'];
        }
    
        // Tampilkan hasil
        echo "Anda memilih buah: " . $selectedBuah . "<br>";

        if (!empty($selectedWarna)) {
            // implode() menggabungkan elemen array menjadi string dengan pemisah ","
            echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
        } else {
            echo "Anda tidak memilih warna favorit.<br>";
        }

        if (!empty($selectedJenisKelamin)) {
            echo "Jenis kelamin Anda: " . $selectedJenisKelamin. "<br><br>";
        }else {
            echo "Anda tidak mengisi jenis kelamin.<br><br>";
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br><br>
        
        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>
        
        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>