<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Terindeks</title>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $listDosen=["Elok Nur Hamdana" , "Unggul Pamenang", "Bagas Nugraha"];
        echo $listDosen[2]. "<br>";
        echo $listDosen[0]. "<br>";
        echo $listDosen[1]. "<br><br>";

        // menggunakan loop
        echo "<b>Menggunakan loop</b><br>";
        foreach ($listDosen as $dosen) {
            echo $dosen. "<br>";
        }
    ?>
</body>
</html>