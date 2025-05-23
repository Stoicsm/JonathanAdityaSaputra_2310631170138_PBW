<h3>Soal 1: Jenis Kendaraan Berdasarkan Jumlah Roda</h3>
<form method="post">
    <label>Masukkan jumlah roda: </label>
    <input type="number" name="roda">
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['roda'])) {
    $roda = $_POST['roda'];
    switch ($roda) {
        case 2:
            echo "Jenis kendaraan: Sepeda motor";
            break;
        case 3:
            echo "Jenis kendaraan: Becak atau Bajaj";
            break;
        case 4:
            echo "Jenis kendaraan: Mobil";
            break;
        case 6:
        case 8:
            echo "Jenis kendaraan: Truk";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui.";
    }
}
?>
