<?php
include('connection.php'); //mengkoneksikan database

$id = $_GET['id']; //mengambil id yang di parsing dari halaman list.php

$delete = mysqli_query($connect, "DELETE FROM karyawan WHERE id='$id' "); //menggunakan kondisi where untuk menyimpan dengan data spesifik

if ($delete)
    header('Location:list.php'); // Jika berhasil akan di arahkan ke halaman list.php

else
    echo 'Delete data gagal';
