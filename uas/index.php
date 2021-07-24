<?php 
require 'function.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
	<title>Perpustakaan Online</title>
</head>
<body>
<div class="navbar">
  <a href="index.php">Katalog</a>
  <a href="index.php">Terbaru</a>
  <div class="dropdown">
    <button class="dropbtn">Autentikasi 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="utama.php">Logout</a>
      <a href="admin.php">Administrator</a>
    </div>
  </div> 
</div>

<div class="konten">
	<div class="card-body">
        <center><h1>Daftar Buku Yang Tersedia</h1></center>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $ambilsemuadata = mysqli_query($koneksikan,"SELECT * FROM stock");
                        while($data=mysqli_fetch_array($ambilsemuadata)){
                        $i = 1;
                        $judulbuku  = $data['judulbuku'];
                        $harga      = $data['hargabuku'];
                        $stockbrng  = $data['jumlahbuku'];
                    ?>

                    <tr>
                        <td><?=$i++;?></td>
                        <td><?=$judulbuku;?></td>
                        <td><?=$harga;?></td>
                        <td><?=$stockbrng;?></td>
                    </tr>
                    <?php 
                        };
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>