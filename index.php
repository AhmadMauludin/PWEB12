<?php
require_once "config/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Dispekael</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png">

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/datepicker.min.css" rel="stylesheet">

  <!-- styles -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Fungsi untuk membatasi karakter yang diinputkan -->
  <script language="javascript">
    function getkey(e) {
      if (window.event)
        return window.event.keyCode;
      else if (e)
        return e.which;
      else
        return null;
    }

    function goodchars(e, goods, field) {
      var key, keychar;
      key = getkey(e);
      if (key == null) return true;

      keychar = String.fromCharCode(key);
      keychar = keychar.toLowerCase();
      goods = goods.toLowerCase();

      // check goodkeys
      if (goods.indexOf(keychar) != -1)
        return true;
      // control keys
      if (key == null || key == 0 || key == 8 || key == 9 || key == 27)
        return true;

      if (key == 13) {
        var i;
        for (i = 0; i < field.form.elements.length; i++)
          if (field == field.form.elements[i])
            break;
        i = (i + 1) % field.form.elements.length;
        field.form.elements[i].focus();
        return false;
      };
      // else return false
      return false;
    }
  </script>

  <style>
    @media print {
      .print {
        display: none;
      }
    }
  </style>

</head>

<body>
  <!--- untuk mengecek sesi di index -->
  <?php
  session_start();

  if ($_SESSION['level'] == "") {
    header("location:login.php?pesan=gagal");
  }
  ?>

  <nav class="navbar navbar-default navbar-fixed-top">
    <!--- untuk menampilkan menu sesuai dengan level -->
    <?php
    if ($_SESSION['level'] == "Admin") {
      include 'menu/menu-admin.php';
    } else if ($_SESSION['level'] == "Pegawai") {
      include 'menu/menu-pegawai.php';
    } else if ($_SESSION['level'] == "User") {
      include 'menu/menu-user.php';
    }
    ?>
  </nav>

  <div class="container-fluid">
    <?php
    if ($_SESSION['level'] == "Admin") {
      include 'routes/admin-routes.php';
    } else if ($_SESSION['level'] == "Pegawai") {
      include 'routes/pegawai-routes.php';
    } else if ($_SESSION['level'] == "User") {
      include 'routes/user-routes.php';
    } else if ($_SESSION['level'] == "") {
      include 'routes/other.php';
    }
    ?>
  </div> <!-- /.container-fluid -->

  <footer class="footer">
    <div class="container-fluid">
      <p class="text-muted pull-left">Dispekael</p>
      <p class="text-muted pull-right print">Meunang <a href="http://www.instagram.com/mmmaldin" target="_blank">Maldin</a></p>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $(function() {

      //datepicker plugin
      $('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
      });

      // toolip
      $('[data-toggle="tooltip"]').tooltip();
    })
  </script>
</body>

</html>