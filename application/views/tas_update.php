<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Data Tas</title>
        <style>
        label {
        display: inline-block;
        width: 100px;
        }
        </style>
    </head>
    <body>
        <h1>Update Data Tas</h1>
        <form action="<?php echo site_url('Home/prosesupdatetas/'.$tas->id);?>" method="post">
        <label>Jenis</label><input type="text" name="Jenis" value="<?php echo $tas->Jenis; ?>"><br>
        <label>Toko</label><input type="text" name="Toko" value="<?php echo $tas->Toko; ?>"><br>
        <label>Nama</label><input type="text" name="Nama" value="<?php echo $tas->Nama; ?>"><br>
        <label>Jumlah</label><input type="text" name="Jumlah" value="<?php echo $tas->Jumlah; ?>"><br>
        <input type="submit" value="Update">
        </form>
    </body>
</html>