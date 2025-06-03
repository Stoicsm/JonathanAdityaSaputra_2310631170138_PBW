<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
</head>
<body>

<h2>Form Input Nilai</h2>

<form method="post" action="">
    Nama: <input type="text" name="nama"><br><br>
    Nilai: <input type="number" name="nilai"><br><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $predikat = "";
    $status = "";

    // Menentukan predikat
    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        $predikat = "B";
    } elseif ($nilai >= 65 && $nilai <= 74) {
        $predikat = "C";
    } elseif ($nilai >= 50 && $nilai <= 64) {
        $predikat = "D";
    } elseif ($nilai >= 0 && $nilai <= 49) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    // Menentukan status
    if ($predikat != "Tidak valid") {
        $status = ($nilai >= 50) ? "Lulus" : "Tidak Lulus";
    } else {
        $status = "Tidak Diketahui";
    }

    // Menampilkan hasil
    echo "<h3>Luaran yang Diharapkan</h3>";
    echo "Nama : $nama<br>";
    echo "Nilai : $nilai<br>";
    echo "Predikat : $predikat<br>";
    echo "Status : $status<br>";
}
?>

</body>
</html>
