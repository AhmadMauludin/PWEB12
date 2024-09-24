    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php">
                <i class="glyphicon glyphicon-grain"></i>
                Dispekael</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?page=user-tampil"> <i class="glyphicon glyphicon-user"></i> USER </a></li>
                <li><a href="?page=pegawai-tampil"> <i class="glyphicon glyphicon-user"></i> PEGAWAI</a></li>
                <li><a href="#"><?php echo $_SESSION['id']; ?> <span class="badge"><?php echo $_SESSION['level']; ?></a></span></li>

                <li><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i></a></li>
            </ul>
        </div>
    </div>