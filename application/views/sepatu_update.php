<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Data Sepatu</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
            }
            .container {
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                margin-bottom: 20px;
            }
            label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }
            input[type="text"] {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            input[type="submit"] {
                display: block;
                width: 100%;
                padding: 10px;
                margin-top: 20px;
                background-color: #4caf50;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Update Data Sepatu</h1>
            <form action="<?php echo site_url('Home/prosesupdatesepatu/'.$sepatu->id);?>" method="post">
                <label for="jenis">Jenis</label>
                <input type="text" id="jenis" name="Jenis" value="<?php echo $sepatu->Jenis; ?>" required>
                <label for="toko">Toko</label>
                <input type="text" id="toko" name="Toko" value="<?php echo $sepatu->Toko; ?>" required>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="Nama" value="<?php echo $sepatu->Nama; ?>" required>
                <label for="jumlah">Jumlah</label>
                <input type="text" id="jumlah" name="Jumlah" value="<?php echo $sepatu->Jumlah; ?>" required>
                <input type="submit" value="Update">
            </form>
        </div>
    </body>
</html>
