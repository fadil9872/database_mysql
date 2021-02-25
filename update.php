<?php

include('connection.php'); // Mengkoneksikan dengan database

$id = $_POST['id'];
// Karena form menggunakan method post kita gunakan $_POST
$nama = $_POST['nama']; // Index didalamnya sesuai dengan input name yang ada di form
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$update = mysqli_query($connect,"UPDATE karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin' WHERE id='$id' "); //menggunakan kondisi where untuk menyimpan dengan data spesifik

if($update) 
    header('Location:list.php'); // Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; // Jika gagal akan keluar pesan tersebut
