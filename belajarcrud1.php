<html>
<head>
    <title>Belajar Get dan Post</title>
</head>
<body>
    <form action="" method="GET">
       <label for="nama">Nama</label>
       <input type="text" name="nama" id="nama">
       <label for="alamat">Alamat</label>
       <input type="text" name="alamat" id="alamat">
       <input type="submit" name="submit" value="submit">
    </form>

<?php
//belajar get dan post
//GET = Data di oper ke web dengan secara terlihat (di url)
//POST = Data di oper ke web dengan secara tidak terlihat (di url)
if ($_GET){
    echo "nama : " . $_GET["nama"];
    echo "</br>";
    echo "alamat : " . $_GET["alamat"];
}
?>

</body>
</html>
