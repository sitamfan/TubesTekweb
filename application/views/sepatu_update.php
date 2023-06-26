<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Data Sepatu</title>
        <style>
        label {
        display: inline-block;
        width: 100px;
        }
        </style>
    </head>
    <body>
        <h1>Update Data Sepatu</h1>
        <form action="<?php echo site_url('Home/prosesupdatesepatu/'.$sepatu->id);?>" method="post">
        <label>Jenis</label><input type="text" name="Jenis" value="<?php echo $sepatu->Jenis; ?>"><br>
        <label>Toko</label><input type="text" name="Toko" value="<?php echo $sepatu->Toko; ?>"><br>
        <label>Nama</label><input type="text" name="Nama" value="<?php echo $sepatu->Nama; ?>"><br>
        <label>Jumlah</label><input type="text" name="Jumlah" value="<?php echo $sepatu ->Jumlah; ?>"><br>
        <input type="submit" value="Update">
        </form>
    </body>
</html>