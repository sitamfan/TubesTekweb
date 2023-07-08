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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            border-bottom: 1px solid #dee2e6;
        }

        .navbar .btn {
            margin-right: 10px;
        }

        .navbar .navbar-nav .nav-link {
            color: #333;
        }

        #page-content-main {
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <!-- Page content wrapper-->
        <div id="page-content-main">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <a href="<?php echo site_url('home'); ?>" class="btn btn-warning btn-sm">Kembali</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/logout'); ?>">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
