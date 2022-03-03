<?php
if (isset($_POST["submit"])) {
    $date = $_POST["date"];
    $time = $_POST["time"];
    $tempat = $_POST["tempat"];
    $suhu = $_POST["suhu"];
    $note = $_POST["note"];
    $format = "\r\n$date|$time|$suhu|$tempat|$note";
    // Membuka file data
    $file = fopen('data/data_perjalanan.txt', 'a+');
    // Menulis input data ke dalam file
    if (fwrite($file, $format)) {
        echo '<script>alert("Berhasil membuat data!");</script>';
        echo '<script>window.location.assign("dashboard.html")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perjalanan</title>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <div class="left"></div>
    <div class="right"></div>
    <div class="container">
        <form method="POST">
            <h3>Form Data</h3>
            <label for="date">Tanggal</label>
            <input type="date" name="date" required>
            <label for="time">Waktu</label>
            <input type="time" name="time" required>
            <label for="tempat">Tempat</label>
            <input type="text" name="tempat">
            <label for="suhu">Suhu</label>
            <input type="number" name="suhu" step="any" id="suhu" required>
            <label for="note">Keterangan</label>
            <select name="note" id="note" onchange="suhu()">
                <option value="positif">Positif</option>
                <option value="negatif">Negatif</option>
            </select>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    <!-- <script>
        function suhu() {
            let suhu = document.getElementById("suhu").value;
            let pilihan = document.getElementById("note");
            if (suhu > 37) {
                pilihan.option[0]
            } else {
                pilihan.option[1]
            }
        }
    </script> -->
</body>

</html>