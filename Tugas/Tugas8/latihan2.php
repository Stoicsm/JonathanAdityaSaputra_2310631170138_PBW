<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            padding: 40px;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type=text], input[type=number] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #0056b3;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #f0f0f0;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Diskon Pembayaran UKT</h2>
    <form method="post" action="">
        NPM: <input type="text" name="npm" required><br>
        Nama: <input type="text" name="nama" required><br>
        Prodi: <input type="text" name="prodi" required><br>
        Semester: <input type="number" name="semester" required><br>
        Biaya UKT (Rp): <input type="number" name="ukt" required><br>
        <input type="submit" value="Proses">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = strtoupper($_POST['nama']);
    $prodi = strtoupper($_POST['prodi']);
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];
    $diskon = 0;

    // Logika diskon
    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon += 5; // total 15%
        }
    }

    $potongan = $ukt * ($diskon / 100);
    $bayar = $ukt - $potongan;

    echo "<div class='hasil'>";
    echo "<strong>Luaran:</strong><br>";
    echo "NPM : $npm<br>";
    echo "NAMA : $nama<br>";
    echo "PRODI : $prodi<br>";
    echo "SEMESTER : $semester<br>";
    echo "BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . ",-<br>";
    echo "DISKON : $diskon%<br>";
    echo "YANG HARUS DIBAYAR : Rp. " . number_format($bayar, 0, ',', '.') . ",-<br>";
    echo "</div>";
}
?>
</div>

</body>
</html>
