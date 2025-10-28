<?php
if (isset($_POST['submit'])) {
    $target_dir = "uploads/"; //direktori yang dituju
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File " . basename($_FILES["fileToUpload"]["name"]) . " berhasil diunggah.";
    } else {
        echo "Gagal mengunggah file.";
    }
}
?>
