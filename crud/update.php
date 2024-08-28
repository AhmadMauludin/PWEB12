<?php
#Memanggil koneksi database
include "koneksi.php";
?>

<!DOCTYPE html>

<head>
  <title>Update data</title>
</head>

<body>

  <?php
  #Mengambil id dari data yang akan diubah
  $id = $_GET['id'];

  #Query SQL untuk menampilkan data berdasarkan id yang yang didapatkan
  $query = "SELECT * FROM tb_siswa WHERE id = $id";

  #Menampilkan data yang dihasilkan dari eksekusi query di atas
  $result = mysqli_query($koneksi, $query);
  foreach ($result as $data) {
  ?>
    <p><b>Update Data</b>

      <!-- Menampilkan data dalam Form, yang  sebelumnya dipanggil untuk diedit -->
    <form method="POST">
      <p><input type="hidden" value="<?= $data['id'] ?>" name="id">

      <p><label for="inputNis">Nis</label>
        <input type="number" id="inputNis" value="<?= $data['nis'] ?>" name="nis">

      <p><label for="inputNama">Nama</label>
        <input type="text" id="inputNama" value="<?= $data['nama'] ?>" name="nama">

      <p><label for="inputKelas">Kelas</label>
        <input type="text" id="inputKelas" value="<?= $data['kelas'] ?>" name="kelas">

      <p><input name="daftar" type="submit" value="Update">
        <a href="index.php" type="button">Kembali</a>
    </form>

  <?php } ?>

  <?php
  #Menyimpan data yang sebelumnya diedit dalam form pengeditan
  if (isset($_POST['daftar'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    #Query SQL untuk memperbaharui data
    $query = "UPDATE tb_siswa SET nis = '$nis', nama = '$nama', kelas = '$kelas' WHERE id = '$id'";

    #Mengecek hasil pengeditan data
    $result = mysqli_query($koneksi, $query);

    if ($result) {

      #Mengembalikan ke halaman index.php jika data berhasil diubah
      header("location: index.php");
    } else {

      #Menampilkan pemberitahuan ketika data gagal diperbaharui
      echo "<script>alert('Data Gagal di update!')</script>";
    }
  }

  ?>

</body>

</html>