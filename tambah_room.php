<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="p_tambah_room.php">
    <table cellpadding="8">
      <tr>
        <td>id</td>
        <td><input type="text" name="id"></td>
      </tr>
      <tr>
        <td>room</td>
        <td><input type="text" name="room"></td>
      </tr>
      
      <tr>
        <td>lantai</td>
        <td><input type="text" name="lantai"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="room.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html> 