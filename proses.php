<?php
include 'koneksi.php';

//ambil data yang ada di form tambah.php
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];

//menginput data dari form ke database

mysqli_query($connect, "INSERT INTO anggota VALUES('','$nama','$no_telp','$alamat','$email','$password')");

var_dump($_POST);

?>