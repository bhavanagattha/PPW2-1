<?php
include 'connect.php';
// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jurusan        = $_POST['jurusan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan'
    , jenis_kelamin='$jenis_kelamin', alamat='$alamat'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php 
header("location:index.php");
?>