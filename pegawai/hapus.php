<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

    $nis = $_GET['id'];

    // perintah query untuk menghapus data pada tabel
    $query = mysqli_query($db, "DELETE FROM pegawai WHERE nis='$nis'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        header('location:?page=pegawai-tampil&alert=4');
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location:?page=pegawai-tampil&alert=1');
    }
}
