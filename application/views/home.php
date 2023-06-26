<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/image/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">RESELLER LIST</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= ('home/Pakaian'); ?>">Pakaian</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= ('home/Tas'); ?>">Tas</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= ('home/Sepatu'); ?>">Sepatu</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/logout'); ?>">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4 mb-2" align="center">Selamat Datang <?php echo $this->session->userdata('username'); ?>!</h1>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="<?= site_url('assets/');?>https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= site_url('assets/');?>js/scripts.js"></script>
    </body>
</html>
