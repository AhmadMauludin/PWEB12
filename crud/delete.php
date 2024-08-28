<?php

#Memanggil koneksi dengan database
include "koneksi.php";

#Mengambil id data yang akan dihapus
$id = $_GET['id'];

#Query untuk menghapus data
$query = "DELETE FROM tb_siswa WHERE id = $id";

#Mendapatkan hasil query penghapusan data
$result = mysqli_query($koneksi, $query);
if ($result) {

  #Mengembalikan ke halaman index.php jika query berhasil
  header("location: index.php");
}
