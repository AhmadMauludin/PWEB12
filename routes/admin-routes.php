<?php

// User

if (empty($_GET["page"])) {
    include "user/tampil-data.php";
} elseif ($_GET['page'] == 'user-tampil') {
    include "user/tampil-data.php";
} elseif ($_GET['page'] == 'tambah') {
    include "user/form-tambah.php";
} elseif ($_GET['page'] == 'proses-simpan') {
    include "user/proses-simpan.php";
} elseif ($_GET['page'] == 'ubah') {
    include "user/form-ubah.php";
} elseif ($_GET['page'] == 'proses-ubah') {
    include "user/proses-ubah.php";
} elseif ($_GET['page'] == 'detail') {
    include "user/detail.php";
} elseif ($_GET['page'] == 'proses-hapus') {
    include "user/proses-hapus.php";


    // Pegawai

} elseif ($_GET['page'] == 'pegawai-tampil') {
    include "pegawai/tampil.php";
} elseif ($_GET['page'] == 'pegawai-tambah') {
    include "pegawai/tambah.php";
} elseif ($_GET['page'] == 'pegawai-simpan') {
    include "pegawai/simpan.php";
} elseif ($_GET['page'] == 'pegawai-detail') {
    include "pegawai/detail.php";
} elseif ($_GET['page'] == 'pegawai-edit') {
    include "pegawai/edit.php";
} elseif ($_GET['page'] == 'pegawai-update') {
    include "pegawai/update.php";
} elseif ($_GET['page'] == 'pegawai-hapus') {
    include "pegawai/hapus.php";
} elseif ($_GET['page'] == 'pegawai-print-detail') {
    include "pegawai/print-detail.php";
} elseif ($_GET['page'] == 'pegawai-kirim') {
    include "pegawai/kirim.php";
}
