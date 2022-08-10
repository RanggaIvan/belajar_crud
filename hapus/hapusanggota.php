<?php
//masukkan koneksi
include '../koneksi.php';

//menangkap data dari url web
$id = $_GET['id_anggota'];

//perintah buat hapus
mysqli_query($connect, "DELETE FROM anggota where id_anggota = '$id'");

//mengalihkan ke halaman sebelumnya
header("location:../belajarcrud5.php");
?>