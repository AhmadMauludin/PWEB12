<?php

// User

if (empty($_GET["page"])) {
    include "siswa-tampil-data.php";
} elseif ($_GET['page'] == 'user-tampil') {
    include "siswa-tampil-data.php";
} elseif ($_GET['page'] == 'ubah') {
    include "form-ubah.php";
} elseif ($_GET['page'] == 'detail') {
    include "detail.php";
}
