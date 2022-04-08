<?php
// Load file koneksi.php
include "config/koneksi.php";

// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form

$room = $_POST['room'];
$lantai= $_POST['lantai'];


// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE room SET room=:room, lantai=:lantai WHERE id=:id");

$sql->bindParam(':room', $room);
$sql->bindParam(':lantai', $lantai);
$sql->bindParam(':id',$id);
$execute = $sql->execute(); // Eksekusi / Jalankan query

if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='updatex.php'>Kembali Ke Form</a>";
}
?>