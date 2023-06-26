<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Tas</title>
        <style>
        label {
        display: inline-block;
        width: 100px;
        }
        </style>
    </head>
    <body>
        <h1>Tambah Tas</h1>
        <form action="<?= site_url('home/prosestambahtas'); ?>" method="post">
        <label>ID</label><input type="text" name="id"><br>
        <label>Toko</label><input type="text" name="Toko"><br>
        <label>Jenis</label><input type="text" name="Jenis"><br>
        <label>Nama</label><input type="text" name="Nama"><br>
        <label>Jumlah</label><input type="text" name="Jumlah"><br>
        <input type="submit" value="Tambah">
        </form>
    </body>
</html>