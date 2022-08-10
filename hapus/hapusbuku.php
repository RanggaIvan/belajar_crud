<?php
//masukkan koneksi
include '../koneksi.php';

//menangkap data dari url web
$id = $_GET['id_buku'];

//perintah buat hapus
mysqli_query($connect, "DELETE FROM book WHERE id_buku = '$id'");

//mengalihkan ke halaman sebelumnya
header("location:../belajarcrud5.php");
?>