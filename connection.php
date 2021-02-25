<?php
    $connect = mysqli_connect('localhost', 'user', '12345678', 'belajar_mysql');

    if ( $connect)
    {
        echo 'Berhasil';
    } else {
        echo 'gagal';
    }
?>