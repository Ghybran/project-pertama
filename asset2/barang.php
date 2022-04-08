<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
  <a href="tambah.php">tambah data</a>
	<table border="1">
		<tr>
			<td>id</td>
			<td>nama_barang</td>
			<td>merek</td>
			<td>jumlah</td>
			<td>tanggal beli</td>
			<td>lokasi</td>
		</tr>
		<?php
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM barang_gh");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['merek']."</td>";
    echo "<td>".$data['jumlah']."</td>";
    echo "<td>".$data['tanggal_masuk']."</td>";
     echo "<td>".$data['lokasi']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
	</table>

</body>
</html>