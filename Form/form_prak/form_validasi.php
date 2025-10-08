<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    
    <form method="post" action="proses_validasi.php" id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        
        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            
            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            // Validasi Nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi Email (Hanya cek kekosongan untuk contoh ini)
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }
            
            // Jika validasi gagal, hentikan pengiriman form
            if (!valid) {
                event.preventDefault(); 
            }

            // Jika valid, form akan dikirim ke action="proses_validasi.php"
        });
    });
    </script>
</body>
</html>