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
    <style>
        body {
            background-color: #f8f9fa;
        }

        #wrapper {
            transition: all 0.4s ease 0s;
            height: 100vh;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin 0.4s ease 0s;
            -moz-transition: margin 0.4s ease 0s;
            -o-transition: margin 0.4s ease 0s;
            transition: margin 0.4s ease 0s;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
            color: #ffffff;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        .navbar {
            background-color: #ffffff;
        }

        .navbar .navbar-nav .nav-link {
            color: #212529;
        }

        .navbar .navbar-nav .nav-link:hover {
            color: #f39c12;
        }

        .container-fluid {
            margin-top: 20px;
        }

        h1 {
            color: #f39c12;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="main">
            <!--<div class="sidebar-heading border-bottom bg-light">RESELLER LIST</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= ('home/Pakaian'); ?>">Pakaian</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= ('home/Tas'); ?>">Tas</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= ('home/Sepatu'); ?>">Sepatu</a>
            </div>-->
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-1 mt-2 -lg-12">
                            <li class="nav-item"><a class="nav-link" href="<?= ('home/Pakaian'); ?>">Pakaian</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= ('home/Tas'); ?>">Tas</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= ('home/Sepatu'); ?>">Sepatu</a></li>
                        </ul>
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/aboutus'); ?>">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/logout'); ?>">Logout</a></li>
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
    <script src="<?= site_url('assets/'); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= site_url('assets/'); ?>js/scripts.js"></script>
</body>

</html>
