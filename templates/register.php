<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div class="left"></div>
    <div class="right"></div>
    <div class="container">
        <form action="" class="form" method="POST">
            <h3>Register</h3>
            <input type="number" id="nik" name="NIK" class="box" placeholder="Nomor Induk Kependudukan" minlength="5" required>
            <input type="text" id="userr" name="username" placeholder="Username" minlength="5" class="box" required>
            <input type="text" id="userrr" name="username1" placeholder="Confirm Username" minlength="5" class="box" required>
            <input type="submit" name="daftar" value="Create Account" id="submit">
            <p>Sudah Punya Akun ? <a href="login.html">Login</a> </p>
        </form>
    </div>
</body>

</html>

<!-- Php Register account -->
<?php
if (isset($_POST["daftar"])) {
    $nik = $_POST["NIK"];
    $username = $_POST["username"];
    $username1 = $_POST["username1"];
    $format = "\r\n$nik|$username";
    $file = fopen('../data/config.txt', 'a');
    // validasi confirm username
    if ($username != $username1) {
        echo '<script>alert("Username tidak sama!")</script>';
        // Jika validasi confirm username terpenuhi
    } else {
        if (fwrite($file, $format)) {
            echo '<script>alert("Anda Berhasil Mendaftar!")</script>';
            echo '<script>window.location.assign("login.html")</script>';
        }
    }
}
?>