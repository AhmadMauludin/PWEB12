<?php
#Memanggil koneksi dengan database
include "koneksi.php"
?>

<!DOCTYPE html>

<head>
  <title>Halaman Utama</title>
</head>

<body>
  <p><b>Daftar Siswa</b>

  <p><a href="tambah.php">Tambah Siswa</a>

  <table>
    <tr>
      <th>No</th>
      <th>Nis</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Aksi</th>
    </tr>

    <?php
    #Menampilkan variabel 1 sebagai angka awal
    $no = 1;

    #Query SQL untuk menampilkan data
    $query = "SELECT * FROM tb_siswa";
    $result = mysqli_query($koneksi, $query);
    ?>

    <?php

    #Menampilkan data yang dipanggi dan mengurutkannya dalam bentuk tabel dengan metode pengulangan
    foreach ($result as $data) {
      echo "
                <tr>
                  <td>" . $no++ . "</td>
                  <td>" . $data["nis"] . "</td>
                  <td>" . $data["nama"] . "</td>
                  <td>" . $data["kelas"] . "</td>
                  <td> 
                    <a href='update.php?id=" . $data["id"] . "'>Update</a>
                    <a href='delete.php?id=" . $data["id"] . "'>Delete</a>
                  </td>
                </tr>  
              ";
    }

    ?>
  </table>

</body>

</html>