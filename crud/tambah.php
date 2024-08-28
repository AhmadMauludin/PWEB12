<?php
include "koneksi.php";
?>
<!DOCTYPE html>

<head>
  <title>Halaman Tambah data</title>
</head>


<body>
  <p><b>Tambah Data</b>

    <!-- Form untuk penginputan data -->
  <form method="POST">
    <p> <label for="inputNis">Nis</label>
      <input type="number" id="inputNis" name="nis">
    <p> <label for="inputNama">Nama</label>
      <input type="text" id="inputNama" name="nama">
    <p> <label for="inputKelas">Kelas</label>
      <input type="text" id="inputKelas" name="kelas">
    <p> <input name="daftar" type="submit" value="Tambah">
      <a href="index.php">Kembali</a>
  </form>

  <!-- Menyimpan data sementara yang telah diinputkan pada form -->
  <?php
  if (isset($_POST['daftar'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    #Query SQL untuk menginput data sementara ke dalam database
    $query = "INSERT INTO tb_siswa (nis, nama, kelas) 
    VALUES('" . $nis . "', '" . $nama . "', '" . $kelas . "')";

    #Mengecek hasil eksekusi query
    $result = mysqli_query($koneksi, $query);

    if ($result) {

      #Mengembalikan ke halaman index.php jika query berhasil
      header("location: index.php");
    } else {
    }
  }
  ?>
</body>

</html>