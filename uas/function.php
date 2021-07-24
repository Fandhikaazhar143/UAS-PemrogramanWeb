<?php 
// koneksikan dengan database
$koneksikan = mysqli_connect("localhost","root","","perpustakaan");

// Tambah Data Barang Baru
if(isset($_POST['tambahstock'])){
    $namabarang = $_POST['judulbuku'];
    $harga      = $_POST['hargabuku'];
    $stock      = $_POST['stock'];

    $tambahbaru = mysqli_query($koneksikan, "INSERT into stock (judulbuku, hargabuku, jumlahbuku) values('$namabarang','$harga','$stock')");
    if($tambahbaru){
        header('location:admin.php');
    } else {
        header('location:admin.php');
    }

};

?>