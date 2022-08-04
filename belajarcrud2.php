<?php
//belajar koneksi database
$connect = mysqli_connect("localhost","root","","db_perpusweb");

if(!$connect){
    echo die("wakwaww ga koneq : " . mysqli_connect_error());
}
{
    echo "siko bagi duo";  mysqli_close($connect);
}

?>