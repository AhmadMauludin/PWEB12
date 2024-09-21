<?php

// User

if (empty($_GET["page"])) {
    include "tampil-data.php";
} elseif ($_GET['page'] == 'user-tampil') {
    include "tampil-data.php";
} elseif ($_GET['page'] == 'tambah') {
    include "form-tambah.php";
} elseif ($_GET['page'] == 'ubah') {
    include "form-ubah.php";
} elseif ($_GET['page'] == 'detail') {
    include "detail.php";

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
}
