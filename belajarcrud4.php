<?php

class manusia
{
    //property class manusia
    var $nama;
    var $warna;

    //fungsi dari manusia
    function tampilkan_nama(){
        return "Nama saya rangga ivan fadly dipanggilnya Rangga";
    }
    function tampilkan_warna(){
        return "Warna saya hitam";
    }
}
//inisiasi class manusia
$orang = new manusia();

//panggil fungsi tampilkan nama
echo $orang->tampilkan_nama();
echo "</br>";
//panggil fungsi tampilkan warna
echo $orang->tampilkan_warna();

?>