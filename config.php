<?php
    //koneksi ke database mysql
    $con = mysqli_connect("localhost","root","","perpus");

    //cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
    if (mysqli_connect_errno()){
        echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
    }
?>