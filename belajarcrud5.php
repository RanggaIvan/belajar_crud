<?php
include 'koneksi.php';
?>
<html>
<head>
    <title>Menampilkan database web</title>
</head>
<body>
    <h2>Anggota</h2>
    <a href="tambah.php">Tambah Data</a>
    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
        
        
    <?php

        $no = 1;
        $data = mysqli_query($connect,"SELECT * FROM anggota");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['nama'] ?></td>
                <td><?php echo $d['no_telp'] ?></td>
                <td><?php echo $d['alamat'] ?></td>
                <td><?php echo $d['email'] ?></td>
            </tr>
            <?php
        }
            ?>
</table>

<h2>Admin</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Id Admin</th>
            <th>Username</th>
        </tr>
        
        
    <?php

        $no = 1;
        $data = mysqli_query($connect,"SELECT * FROM admin");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['id_admin'] ?></td>
                <td><?php echo $d['username'] ?></td>
            </tr>
            <?php
        }
            ?>
        
</table>

<h2>Buku</h2>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </tr>
        
        
    <?php
 

        $no = 1;
        $data = mysqli_query($connect,"SELECT * FROM book");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['judul_buku'] ?></td>
                <td><?php echo $d['pengarang'] ?></td>
                <td><?php echo $d['thn_terbit'] ?></td>
                <td><?php echo $d['penerbit'] ?></td>
            </tr>
            <?php
        }
            ?>
</table>

</body>
</html>