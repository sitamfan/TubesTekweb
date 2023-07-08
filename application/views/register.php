<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Register User</title> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> 
        <style> 
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f1f1f1;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .card-header {
            background-color: #f39c12;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .form-label {
            color: #333;
        }

        .form-control {
            border-color: #ddd;
        }

        .btn-primary {
            background-color: #f39c12;
            border-color: #f39c12;
        }

        .btn-primary:hover {
            background-color: #e08e0b;
            border-color: #e08e0b;
        }

        .btn-link {
            color: #f39c12;
        }

        .btn-link:hover {
            color: #e08e0b;
        }
        </style> 
    </head>
    <body class="login-page">
        <div class="card">
            <div class="card-header text-center">Register</div>
            <div class="card-body">
                <form action="<?php echo site_url('home/prosesdaftar') ?>" method="post" enctype="multipart/form-data">
                    <label class="label">Username</label>
                    <input type="text" class="form-control" name="username" required>
                    <label class="label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                    <label>Profil Picture</label>
                    <input type="file" class="form-control" name="pp" required>
                    <br>
                    <input type="submit" class="btn btn-primary float-right" value="Register">
                </form>
            </div>
            <div class="card-footer text-center">
                Sudah Punya Akun?
                <br><a href="<?php echo site_url('home/login') ?>">Sign In</a>
            </div>
        </div>
    </body>
</html>