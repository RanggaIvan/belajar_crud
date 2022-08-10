<html>
<head>
    <title>Tambah data anggota</title>
</head>
<body>
    <h2>Silahkan Tambah Data Anggota</h2>
    <br/>
    <label for="cars">Choose a car:</label>
<select id="cars" name="cars">
  <option value="volvo">Anggota</option>
  <option value="saab">Admin</option>
  <option value="fiat">Buku</option>
</select>
    <form method="post" action="proses.php">
        <label for="">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="">No Telp</label>
        <input type="number" name="no_telp" id="no_telp">
        <br>
        <label for="">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <br>
        <label for="">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="simpan">

        
    </form>
</body>
</html>