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
	<title>Halaman Administrasi - Pepustakaan Online</title>
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
    </div>
  </div> 
</div>
<div class="konten">
	<div class="card-body">
    <center><h1>Halaman Administrasi Perpustakaan Online</h1></center>
    <h4 class="modal-title">Tambah Buku Baru</h4>
    <form method="post">
        <div class="modal-body">
          <p><input type="text" name="judulbuku" placeholder="Judul Buku" class="form-control" required></p>
          <p><input type="number" name="hargabuku" placeholder="Harga Buku" class="form-control" required></p>
          <p><input type="number" name="stock" placeholder="Jumlah Stock" class="form-control" required></p>
          <button type="submit" class="btn btn-primary" name="tambahstock">Submit</button>
        </div>
        </form>
  </div>
</div>
</body>
</html>