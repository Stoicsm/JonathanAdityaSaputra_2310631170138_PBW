<h3>Soal 4: Menentukan Genap atau Ganjil</h3>
<form method="post">
    <label>Masukkan angka: </label>
    <input type="number" name="angka">
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "Angka $angka adalah $hasil";
}
?>
