<?php 
require 'function.php';
if(isset($_POST['buatakun'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasipassword = $_POST['konfirmasipassword'];
        if($password!==$konfirmasipassword){
            echo "<script type='text/javascript'> alert('Password Yang Anda Masukkan Tidak Sama') </script>";
            echo "<script type='text/javascript'> alert('Data Gagal Dismpan') </script>";
        } else if($password===$konfirmasipassword){
            $mysqli = "INSERT INTO login (email, password) VALUES ('$email','$password')";
            $hasil = mysqli_query($koneksikan, $mysqli);
            sleep(2);
            header("location: utama.php");

        }
        mysqli_close($koneksikan);
    };

 ?>

 <?php 
require 'function.php';
// Cek Data di Database dan apabila data ada maka berhasil login
// cek daftar data yang ada di database
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekdata = mysqli_query($koneksikan, "SELECT * FROM login where email='$email' and password='$password'");
    $adadata = mysqli_num_rows($cekdata);

    if($adadata>0){
        header('location:index.php');
    } else {
        sleep(2);
        header('location:utama.php');
    };
};

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<title>Halaman Utama - Perpustakaan Online</title>
	<link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="logoweb">
		<img src="img/logoweb.png" alt="">
	</div>
	<div class="kartu">
		<p class="p1">Halo, Selamat Datang di Perpustakaan Online. Disini kamu bisa mendapatkan banyak pengetahuan baru dan terkini. Disini tersedia banyak buku yang bisa kamu beli. Terima kasih telah berkunjung.</p>
		<button class="tombol1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Masuk</button>
		<button class="tombol2" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Daftar</button>
	</div>

	<div id="id01" class="modal">
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Masukkan Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Masukkan Password" name="password" required>
        
      <button type="submit" class="loginbtn" name="login">Masuk</button>
    </div>
  </form>
</div>

<script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div id="id02" class="modal">
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <h1>Daftar Akun</h1>
      <p>Isi kolom di bawah untuk membuat akun baru.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Masukkan Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Masukkan Password" name="password" required>

      <label for="psw-repeat"><b>Ulangi Password</b></label>
      <input type="password" placeholder="Ulangi Password" name="konfirmasipassword" required>
      
      <div class="clearfix">
        <button type="submit" name="buatakun" class="signupbtn">Buat Akun</button>
      </div>
    </div>
  </form>
</div>

<script>

var modal = document.getElementById('id02');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>