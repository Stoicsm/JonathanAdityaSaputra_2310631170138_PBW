<?php
   echo "Halo, selamat datang di dunia PHP!";
?>
<?php
   $nama = "Budi";
   $umur = 20;


   // Menampilkan nilai variabel
   echo "Nama: " . $nama . "<br>";
   echo "Umur: " . $umur . " tahun<br>";
?>
define("NAMA_KONSTANTA", nilai);
<?php
define("SITE_NAME", "unsika.ac.id");
define("VERSION", "1.0");


echo "Selamat datang di " . SITE_NAME . "<br>";
echo "Versi Sistem: " . VERSION . "<br>";
?>
<?php
   $nama = "Andi";
   echo "Nama saya adalah”. $nama;
?>
<?php
   $umur = 25;
   echo "Umur saya”. $umur. “tahun";
?>
<?php
   $berat = 55.5;
   echo "Berat badan saya". $berat ."kg";
?>
<?php
   $isLogin = true;
?>
<?php
   $buah = ["apel", "jeruk", "mangga"];
   echo $buah[1];
?>
<?php
   class Mahasiswa {
       public $nama;
       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }
   $mhs = new Mahasiswa();
   $mhs->nama = "Jeni";
   echo $mhs->sapa();
?>
<?php
   $data = null;
   var_dump($data);
?>
