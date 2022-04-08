<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah Data barang</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>ID</td>
        <td><input type="text" name="id"></td>
      </tr>
      <tr>
        <td>Nama barang</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>merek</td>
        <td><input type="text" name="merek"></td>
      </tr>
      <tr>
        <td>jumlah</td>
        <td><input type="text" name="jumlah"></td>
      </tr>
      <tr>
        <td>lokasi</td>
        <td><input type="text" name="lokasi"></td>
      </tr>
      <tr>
        <td>tangal_masuk</td>
        <td><input type="date" name="tanggal"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>