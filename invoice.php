<?php 
// echo $_GET['id'];
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysqli = mysqli_query($koneksi, "SELECT*FROM transaksi INNER JOIN produk ON transaksi.id_produk = produk.id WHERE id_transaksi='$id'");
    print_r($query_mysqli);
    // die;
?>