<?php
// Load file koneksi.php
include "config/koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$lokasi= $_POST['lokasi'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO barang(id, nama, jumlah, lokasi) VALUES(:id,:nama,:jumlah,:lokasi)");
$sql->bindParam(':id', $id);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':jumlah', $jumlah);
$sql->bindParam(':lokasi', $lokasi);
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