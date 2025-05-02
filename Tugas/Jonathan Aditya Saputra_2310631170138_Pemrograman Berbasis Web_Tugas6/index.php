<?php
define("PAJAK", 0.10);

// Array barang dengan harga
$barangList = array(
    "Keyboard" => 150000,
    "Mouse" => 80000,
    "Monitor" => 1750000
);

// Pilih barang dan jumlah beli
$namaBarang = "Keyboard";
$jumlahBeli = 2;

// Fungsi menghitung total
function hitungTotal($namaBarang, $jumlahBeli, $barangList) {
    $hargaSatuan = $barangList[$namaBarang];
    $totalSebelumPajak = $hargaSatuan * $jumlahBeli;
    $pajak = $totalSebelumPajak * PAJAK;
    $totalBayar = $totalSebelumPajak + $pajak;

    return array(
        "nama_barang" => $namaBarang,
        "harga_satuan" => $hargaSatuan,
        "jumlah_beli" => $jumlahBeli,
        "total_sebelum_pajak" => $totalSebelumPajak,
        "pajak" => $pajak,
        "total_bayar" => $totalBayar
    );
}

// Hitung hasil
$hasil = hitungTotal($namaBarang, $jumlahBeli, $barangList);

// Tampilkan hasil
echo "<div style='font-family:Arial,sans-serif; max-width:500px; margin:50px auto; padding:20px; border-radius:10px; background:#f9f9f9; box-shadow:0 0 10px rgba(0,0,0,0.1);'>";
echo "<h2 style='text-align:center;'>Detail Pembelian</h2>";
echo "<table style='width:100%; border-collapse:collapse; font-size:16px;'>";

foreach ($hasil as $key => $value) {
    $label = ucwords(str_replace('_', ' ', $key));
    echo "<tr>";
    echo "<td style='padding:8px; border-bottom:1px solid #ddd;'>$label</td>";
    if (is_numeric($value)) {
        $value = "Rp " . number_format($value, 0, ',', '.');
    }
    echo "<td style='padding:8px; border-bottom:1px solid #ddd;'>$value</td>";
    echo "</tr>";
}

echo "</table>";
echo "</div>";
?>
