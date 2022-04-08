<?php
// Load file koneksi.php
include "config/koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$room = $_POST['room'];
$lantai = $_POST['lantai'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO room(id, room, lantai) VALUES(:id,:room,:lantai)");
$sql->bindParam(':id', $id);
$sql->bindParam(':room', $room);
$sql->bindParam(':lantai', $lantai);
$sql->execute(); // Eksekusi query insert

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
}
?>