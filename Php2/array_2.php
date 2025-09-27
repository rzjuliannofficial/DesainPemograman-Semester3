<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
    table { border-collapse: collapse; width: 50%; }
    td { border: 1px solid #000000ff; padding: 8px; text-align: left; }
</style>
</head>
<body>
    <?php
        
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' ];

        echo "<table>";
        echo "<tr><td>Nama: <td>{$Dosen ['nama']} <br></td></tr>";
        echo "<tr><td>Domisili: <td>{$Dosen ['domisili']} <br></td></tr>";
        echo "<tr><td>Jenis Kelamin : <td>{$Dosen ['jenis_kelamin']} <br></td></tr>";
        echo "</table>";
    ?>
</body>
</html>