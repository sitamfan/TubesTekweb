<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
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
        }
        </style>
    </head>
    <body class="login-page">
        <div class="card" style="width:300px">
            <div class="card-header text-center">Login</div>
            <div class="card-body">
                <form action="<?php echo site_url('home/proseslogin');?>"method="post">
                <label class="label">Username</label>
                <input type="text" class="form-control" name="username" required>
                <label class="label">Password</label>
                <input type="password" class="form-control" name="password" required>
                <br>
                <?php echo $this->session->userdata("error"); ?>
                <br>
                <input type="submit" class="btn btn-primary float-right" value="Login">
            </div>
            <div class="card-footer text-center">
                Tidak Punya Akun?
                <br><a href="<?php echo site_url('home/register') ?>">Register</a>
            </div>
        </div>
    </body>
</html>