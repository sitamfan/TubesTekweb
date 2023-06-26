<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Data Pakaian</title>
        <style>
        label {
        display: inline-block;
        width: 100px;
        }
        </style>
    </head>
    <body>
        <h1>Update Data Pakaian</h1>
        <form action="<?php echo site_url('Home/prosesupdatepakaian/'.$pakaian->id);?>" method="post">
        <label>Nama</label><input type="text" name="Nama" value="<?php echo $pakaian->Nama; ?>"><br>
        <label>Toko</label><input type="text" name="Toko" value="<?php echo $pakaian->Toko; ?>"><br>
        <label>Warna</label><input type="text" name="Warna" value="<?php echo $pakaian->Warna; ?>"><br>
        <label>Jumlah</label><input type="text" name="Jumlah" value="<?php echo $pakaian->Jumlah; ?>"><br>
        <input type="submit" value="Update">
        </form>
    </body>
</html>