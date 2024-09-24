<!DOCTYPE html>
<html>

<head>
    <title>Dispekael Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<body>
    <?php
    require_once "config/database.php";



    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "2") {
            echo "<div class='pesan'>Pendaftaran Akun Gagal</div>";
        } else if ($_GET['pesan'] == "logindulu") {
            echo "<div class='pesan'>Silahkan Login dulu !</div>";
        }
    }
    ?>

    <div class="kotak_login">
        <center><img src="assets/img/favicon.png"></center>
        <p class="tulisan_login"> DAFTAR AKUN BARU</p>
        <hr>

        <form action="proses-daftar.php" method="post">
            <p><label>Id akun login (Harap diingat) </label>
                <?php
                $query = mysqli_query($db, "SELECT * FROM user ORDER BY id DESC limit 1") or die('Query Error : ' . mysqli_error($db));
                while ($data = mysqli_fetch_assoc($query)) {
                    $id = $data['id'];
                }
                $idi = $id + 1;
                ?>
            <p><input type="text" name="id" value="<?php echo $idi; ?>" class="form_login" readonly></p>
            <label>Username</label>
            <P><input type="text" name="username" class="form_login" placeholder="Masukan Username" required="required"></P>
            <label>Password</label>
            <p><input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required"></p>
            <p><input type="hidden" name="level" class="form_login" placeholder="Masukan id" value="User" required="required"></P>
            <label>Nomor Induk Siswa</label>
            <p><input type="number" name="nis" class="form_login" placeholder="Masukan Nomor Induk Siswa" required="required"></p>
            <p>
                <center><input type="submit" name="simpan" class="tombol_login" value="DAFTAR">
            </p>
        </form>
        <hr>
        <p>Sudah memiliki akun?
            <a href="login.php">Login</a>
        </p>
        </center>
    </div>
</body>

</html>