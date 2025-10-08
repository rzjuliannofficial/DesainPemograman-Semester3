<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi AJAX</h1>
    
    <form method="post" id="myFormAjax">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        
        <label for="password">Password</label>
        <input type="text" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>
    
    <div id="server-response" style="margin-top: 15px; border: 1px solid #ccc; padding: 10px;">
        Menunggu pengiriman form...
    </div>

    <script>
    $(document).ready(function() {
        $("#myFormAjax").submit(function(event) {
            event.preventDefault(); // Mencegah pengiriman form default
            
            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            // Validasi Nama (Sisi Klien)
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi Email (Sisi Klien)
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }
            
            //validasi password
            if (password === "") {
                $("#password-error").text("password harus diisi.");
            } else {
                $("#password-error").text("");
            }

            if (valid) {
                // KIRIM DATA MENGGUNAKAN AJAX
                var formData = $(this).serialize();
                $("#server-response").html("Mengirim data...");
                
                $.ajax({
                    type: 'POST',
                    url: 'proses_validasi.php', // Menggunakan file proses_validasi.php sebagai pemroses
                    data: formData,
                    success: function(response) {
                        // Tampilkan respons dari server (yang berisi hasil validasi server)
                        $("#server-response").html("<strong>Respons Server:</strong><br>" + response);
                    },
                    error: function() {
                        $("#server-response").html("Terjadi kesalahan saat menghubungi server.");
                    }
                });
            }
        });
    });
    </script>
</body>
</html>