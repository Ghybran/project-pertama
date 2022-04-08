<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="p_tambah.php">
    <table cellpadding="8">
      <tr>
        <td>id</td>
        <td><input type="text" name="id"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      
      <tr>
        <td>jumlah</td>
        <td><input type="text" name="jumlah"></td>
      </tr>
      <tr>
        <td>lokasi</td>
        <td><textarea name="lokasi"></textarea></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html> 