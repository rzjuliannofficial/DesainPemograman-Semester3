<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif"); // Ganti ekstensi
    $max_size = 2097152; // 2MB

    $totalFiles = count($_FILES['files']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        
        // Ambil ekstensi
        @$file_ext = strtolower(end(explode('.', $file_name)));
        
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file $file_name tidak diizinkan.";
        }
        if ($file_size > $max_size) {
            $errors[] = "Ukuran file $file_name lebih dari 2 MB.";
        }
        
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "images/" . $file_name); // Ganti direktori
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah $file_name: " . implode(" ", $errors) . "<br>";
            $errors = array(); // Reset error untuk file berikutnya
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>