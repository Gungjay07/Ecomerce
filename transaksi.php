<?php 
// print_r($_REQUEST);
include 'koneksi.php';
$id = $_REQUEST['id'];
$nama = $_REQUEST['nama'];
$merek=$_REQUEST['merk'];
$harga = $_REQUEST['harga'];
$qty = $_REQUEST['stok'];
$kategori = $_REQUEST['kategori'];
$deskripsi = $_REQUEST['deskripsi'];

$cek_qty = $koneksi->query("SELECT * FROM produk WHERE id='$id'");
$data = $cek_qty->fetch_assoc();
// print_r();
if($data['stok']< $qty){
    echo "<script>alert('Stok tidak mencukupi');window.location='pagecustomer.php?no=$id'</script>";
}else{
    $koneksi->query("UPDATE produk SET stok=stok-'$qty' WHERE id='$id'");
    $total = $data['harga']*$qty;
    $koneksi->query("INSERT INTO transaksi VALUES (null,'$id','$total', '$qty')");
    $last_id = $koneksi->insert_id;
    header("location:struk.php?id=$last_id");
}

?>
