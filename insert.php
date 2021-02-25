<?php

include('connection.php');

//karena form menggunakan method post kita gunakan $_POST
$nama = $_POST['nama']; //index didalamnya sesuai dengan input name yang ada di form
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$insert = mysqli_query($connect,"INSERT INTO karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin' "); 

if($insert) 
    header('Location:list.php'); //Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; //jika gagal akan keluar pesan tersebut