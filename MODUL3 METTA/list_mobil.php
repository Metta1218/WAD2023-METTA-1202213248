<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>

<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nama_mobil</th>
                        <th scope="col">brand_mobill</th>
                        <th scope="col">warna_mobi</th>
                        <th scope="col">tipe_mobil</th>
                        <th scope="col">harga_mobil</th>
                        <th scope="col">button</th>
                    </tr>
                </thead>
                <body>
                    <?php
            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = "SELECT * FROM showroom_mobil ";
            $result = mysqli_query($connect, $query);

            // $query = "SELECT * FROM 'showroom_mobil' ";
            // $result = mysqli_query($connect, $query);
            // if ($result) {
            //     while ($row = mysqli_fetch_assoc($result)) {
            // $nama_mobil = $row['nama_mobil'];
            // $brand_mobil  = $row['brand_mobil'];
            // $warna_mobil  = $row['warna_mobil'];
            // $tipe_mobil  = $row['tipe_mobil'];
            // $harga_mobil  = $row['harga_mobil'];
            //         echo '<tr>
            //         <th scope="row">' . $brand_mobil . '</th>
            //         <td>' . $nama_mobil . '</td>               
            //         <td>' . $brand_mobil . '</td>
            //         <td>' . $warna_mobil . '</td>
            //         <td>' . $tipe_mobil . '</td>
            //         <td>' . $harga_mobil . '</td>
            //         </tr>';
            // //     }
            // }


            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if ($result -> num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $nama_mobil = $row['nama_mobil'];
                    $brand_mobil  = $row['brand_mobil'];
                    $warna_mobil  = $row['warna_mobil'];
                    $tipe_mobil  = $row['tipe_mobil'];
                    $harga_mobil  = $row['harga_mobil'];
                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    
                    <td>' . $nama_mobil . '</td>
                    <td>' . $brand_mobil . '</td>               
                    <td>' . $warna_mobil . '</td>
                    <td>' . $tipe_mobil . '</td>
                    <td>' . $harga_mobil . '</td>
                    <td><button class="btn btn-primary my-2"><a href="form_detail_mobil.php?detailid=' . $id . '" class="text-light">detail mobil</a></button></td>
                    </tr>';
                }
            }
            ?>
        </tbody>
    </table>

    <?php
            // if()

            // if  ($query->num_rows>0){
            //     echo "<table Class="IniTabel table-striped">";
            //     echo "<thead>
            //         <tr><th>id</th>
            //         <th>nama_mobil</th>
            //         <th>brand_mobil</th>
            //         <th>warna_mobil</th>
            //         <th>tipe_mobil</th>
            //         <th>harga_mobil</th> 
            //         </thead>";
            //     while(){

            //     }


            // } 








            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->






            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>

</html>