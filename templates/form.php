<?php
if (isset($_POST["submit"])) {
    $date = $_POST["date"];
    $time = $_POST["time"];
    $tempat = $_POST["tempat"];
    $suhu = $_POST["suhu"];
    $id_catatan = rand(0, 100);
    $format = "\r\n$id_catatan|$date|$time|$suhu|$tempat";
    // Membuka file data
    $file = fopen('../data/data_perjalanan.txt', 'a');
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
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv='expires' content='0'>
    <meta http-equiv="pragma" content="no-cache">
    <title>Form Perjalanan</title>
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <div class="left"></div>
    <div class="right"></div>
    <div class="container">
        <form method="post">
            <input type="hidden" name="id_catatan" value="<? $pecah['0']; ?>">
            <h3>Form Data</h3>
            <label for="date">Tanggal</label>
            <input value="<? $pecah['1']; ?>" type="date" name="date" required>
            <label for="time">Waktu</label>
            <input value="<? $pecah['2']; ?>" type="time" name="time" required>
            <label for="suhu">Suhu</label>
            <input value="<? $pecah['3']; ?>" type="number" name="suhu" step="any" id="suhu" required>
            <label for="tempat">Tempat</label>
            <select value="<? $pecah['4']; ?>" name="tempat" id="tempat">
                <option value="Jakarta">Jakarta</option>
                <option value="Bandung">Bandung</option>
                <option value="Bandung">Surabaya</option>
                <option value="Bandung">Bogor</option>
                <option value="Bandung">Aceh</option>
            </select>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>