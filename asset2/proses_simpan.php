<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama = $_POST['nama'];
$merek = $_POST['merek'];
$jumlah = $_POST['jumlah'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO barang_gh(id, nama, merek, jumlah, lokasi, tanggal) VALUES(:id,:nama,:merek,:jumlah,:lokasi,:tanggal)");
$sql->bindParam(':id', $id);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':merek', $merek);
$sql->bindParam(':jumlah', $jumlah);
$sql->bindParam(':lokasi', $lokasi);
$sql->bindParam(':tanggal', $tanggal)
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>