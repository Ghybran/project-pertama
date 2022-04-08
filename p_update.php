<?php
// Load file koneksi.php
include "config/koneksi.php";

// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form

$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$lokasi = $_POST['lokasi'];


// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE barang SET nama=:nama, jumlah=:jumlah, lokasi=:lokasi WHERE id=:id");

$sql->bindParam(':nama', $nama);
$sql->bindParam(':jumlah', $jumlah);
$sql->bindParam(':lokasi', $lokasi);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query

if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='updateb.php'>Kembali Ke Form</a>";
}
?>