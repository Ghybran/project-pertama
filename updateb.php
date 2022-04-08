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
  $sql = $pdo->prepare("SELECT * FROM barang WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>

  <form method="post" action="p_update.php?id=<?php echo $id; ?>">   
    <table cellpadding="8">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
      </tr>
      <tr>
        <td>jumlah</td>
        <td><input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
      </tr>
      <tr>
        <td>lokasi</td>
        <td><textarea name="lokasi"><?php echo $data['lokasi']; ?></textarea></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>