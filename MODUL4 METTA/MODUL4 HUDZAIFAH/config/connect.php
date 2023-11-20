<!-- File ini berisi koneksi dengan database MySQL -->
<?php

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$Host = "localhost:3306";
$Username = "root";
$Password = "";
$Namedb = "modul4_wad";

$connect = mysqli_connect($Host, $Username, $Password, $Namedb);


// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi

// 
if ($connect->connect_error) {
    die("gagal koneksi: " . $connect->connect_error);
}


?>