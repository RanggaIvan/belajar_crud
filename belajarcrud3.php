<?php

class mobil
{
 //property dari mobil
 var $warna;
 var $merk;
 var $ukuran;
 
 //membuat operasi mobil
 function maju($move_forward){
    $move_forward = "Gaskennn";
 }
 function mundur(){
    $move_backward = "Remkannn";
 }
}

//inisiasi ( panggil objek melalui class )
$kendaraan = new mobil();

echo $kendaraan->maju($move_forward);
?>