<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Ubah Data Siswa</h1>

  <?php
  // Load file koneksi.php
  include "config/koneksi.php";

  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];

  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM room WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>

  <form method="post" action="p_updatex.php?id=<?php echo $id; ?>">   
    <table cellpadding="8">
      <tr>
        <td>room</td>
        <td><input type="text" name="room" value="<?php echo $data['room']; ?>"></td>
      </tr>
      <tr>
        <td>lantai</td>
        <td><input type="text" name="lantai" value="<?php echo $data['lantai']; ?>"></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Ubah">
    <a href="room.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>