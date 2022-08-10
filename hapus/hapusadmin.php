<?php
//masukkan koneksi
include '../koneksi.php';

//menangkap data dari url web
$id = $_GET['id_admin'];

//perintah buat hapus
mysqli_query($connect, "DELETE FROM admin WHERE id_admin = '$id'");

//mengalihkan ke halaman sebelumnya
header("location:../belajarcrud5.php");
?>