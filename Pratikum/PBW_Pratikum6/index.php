<?php
// Konstanta pajak
define("PAJAK", 0.10);

// Data barang dan harga
$barang = array("Keyboard" => 150000);

// Barang yang dibeli
$nama_barang = "Keyboard";
$jumlah_beli = 2;

// Proses hitung
$harga_satuan = $barang[$nama_barang];
$total_sebelum_pajak = $harga_satuan * $jumlah_beli;
$pajak = $total_sebelum_pajak * PAJAK;
$total_bayar = $total_sebelum_pajak + $pajak;

// Tampilkan hasil ke layar
echo "PERHITUNGAN TOTAL PEMBELIAN (DENGAN ARRAY)\n";
echo "------------------------------------------\n";
echo "Nama Barang          : $nama_barang\n";
echo "Harga Satuan         : Rp " . number_format($harga_satuan, 0, ',', '.') . "\n";
echo "Jumlah Beli          : $jumlah_beli\n";
echo "Total Sebelum Pajak  : Rp " . number_format($total_sebelum_pajak, 0, ',', '.') . "\n";
echo "Pajak (10%)          : Rp " . number_format($pajak, 0, ',', '.') . "\n";
echo "TOTAL BAYAR          : Rp " . number_format($total_bayar, 0, ',', '.') . "\n";
?>
