<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
// $connect = mysqli_connect(
//     'localhost',
//     'root',
//     '',
//     'modul3'
// );
    $Host = "localhost";
    $Username = "root";
    $Password = "";
    $Namedb = "modul3_wad";

// 
$connect = mysqli_connect($Host, $Username, $Password, $Namedb);
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($connect->connect_error) {
    echo "gagal connect";
}
// 
?>