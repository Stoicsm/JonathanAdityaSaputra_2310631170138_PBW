<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Soal Pilihan</title>
</head>
<body>
    <h2>Pilih Soal</h2>
    <form method="get">
        <input type="radio" name="soal" value="1" id="soal1"><label for="soal1">Soal 1 - Jenis Kendaraan</label><br>
        <input type="radio" name="soal" value="2" id="soal2"><label for="soal2">Soal 2 - Bilangan Genap</label><br>
        <input type="radio" name="soal" value="3" id="soal3"><label for="soal3">Soal 3 - Daftar Hewan</label><br>
        <input type="radio" name="soal" value="4" id="soal4"><label for="soal4">Soal 4 - Genap atau Ganjil</label><br>
        <button type="submit">Tampilkan</button>
    </form>

    <hr>

    <?php
    if (isset($_GET['soal'])) {
        switch ($_GET['soal']) {
            case '1':
                include 'soal1.php';
                break;
            case '2':
                include 'soal2.php';
                break;
            case '3':
                include 'soal3.php';
                break;
            case '4':
                include 'soal4.php';
                break;
            default:
                echo "Soalnya gada kakak :(";
        }
    }
    ?>
</body>
</html>
