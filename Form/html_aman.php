<?php

$output_input = "";
$output_email = "";
$email_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['input'])) {
        $input = $_POST['input'];
        
        // Membersihkan input dari potensi HTML Injection
        // htmlspecialchars() mengubah karakter khusus menjadi entitas HTML
        $input_aman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); 
        
        $output_input = "Input Mentah: " . $input . "<br>" .
                        "Input Aman (htmlspecialchars): " . $input_aman;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Penanganan HTML Injection</title>
</head>
<body>
    <h2>Uji Keamanan Input</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input Teks Uji (Coba masukkan &lt;script&gt;alert('hacked')&lt;/script&gt;):</label><br>
        <input type="text" name="input" id="input" value=""><br><br>
        
        <input type="submit" value="Uji Input">
    </form>
    
    <hr>
    <h3>Hasil Pengamatan (Soal 4.1 dan 4.2):</h3>
    <p><?php echo $output_input; ?></p>
    <p><?php echo $output_email; ?></p>
</body>
</html>