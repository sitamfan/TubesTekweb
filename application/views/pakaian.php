<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakaian</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1>Daftar Pakaian</h1>
    <p><a href="<?php echo site_url('home/tambahpakaian'); ?>" class="btn btn-warning btn-sm">Tambah</a></p>
    <?php
    $template = array(
        'table_open' => '<table id="myTable" class="table table-striped table-bordered" style="width:100%" border="1" align="center">'
    );
    $query = $this->db->get('pakaian');
    $results = $query->result();
    $this->table->set_template($template);
    $this->table->set_heading("ID", "Toko", "Nama", "Warna", "Jumlah", "Aksi");
    foreach ($results as $r) {
        $edit = '<a href="' . site_url("home/updatepakaian/" . $r->id) . '">edit</a>';
        $hapus = '<a href="' . site_url("home/hapuspakaian/" . $r->id) . '">hapus</a>';
        $this->table->add_row($r->id, $r->Toko, $r->Nama, $r->Warna, $r->Jumlah, $edit . " " . $hapus);
    }
    echo $this->table->generate();
    ?>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
 
</body>
    <footer>

    </footer>
</html>
