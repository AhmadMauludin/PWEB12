<?php

// Pegawai

if (empty($_GET["page"])) {
    include "pegawai/tampil.php";
} elseif ($_GET['page'] == 'pegawai-tampil') {
    include "pegawai/tampil.php";
} elseif ($_GET['page'] == 'pegawai-detail') {
    include "pegawai/detail.php";
} elseif ($_GET['page'] == 'pegawai-edit') {
    include "pegawai/edit.php";
} elseif ($_GET['page'] == 'pegawai-update') {
    include "pegawai/update.php";
} elseif ($_GET['page'] == 'pegawai-print-detail') {
    include "pegawai/print-detail.php";
} elseif ($_GET['page'] == 'pegawai-kirim') {
    include "pegawai/kirim.php";
}
