<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"> 
        <span id="email-error" style="color: red;"></span>
        <br>

        <input type="submit" value="Submit">
    </form>
    <div id="hasil"></div> <!-- Tempat untuk menampilkan hasil -->
    
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Hentikan pengiriman form secara default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Validasi
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                
                if (valid) {
                
                    var formData = $(this).serialize();

                    
                    $.ajax({
                        url: "proses_validasi.php", 
                        type: "POST",
                        data: formData,
                        success: function(response) {
                           
                            $("#hasil").html(response);
                        },
                        error: function(xhr, status, error) {
                            $("#hasil").html("Terjadi kesalahan: " + error);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
