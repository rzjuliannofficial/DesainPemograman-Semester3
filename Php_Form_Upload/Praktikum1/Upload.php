<?php
if (isset($_POST['submit'])) {
    $target_dir = "uploads/"; //direktori yang dituju
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxsize = 5*1024*1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "File " . basename($_FILES["fileToUpload"]["name"]) . " berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else{
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>

