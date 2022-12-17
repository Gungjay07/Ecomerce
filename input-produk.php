<?php
include "koneksi.php";
session_start();
if (isset($_POST['btn'])) {

	$nama = $_POST['namaproduk'];
	$merkproduk = $_POST['merkproduk'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];

    $ekstensi_diperbolehkan	= ['png','jpg'];
    $name_file = $_FILES['gambar']['name'];
    $x = explode('.', $name_file);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];


    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){			
            move_uploaded_file($file_tmp, 'images/'.$name_file);
            $query = mysqli_query($koneksi,"INSERT INTO produk (nama, merk, harga, deskripsi, gambar, kategori, stok) VALUES ('$nama', '$merkproduk', '$harga', '$deskripsi', '$gambar', '$kategori', $stok)");
            if($query){
                // echo 'FILE BERHASIL DI UPLOAD';
                header('Location: pageadmin.php');
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }

		// $sql = $koneksi->query("INSERT INTO produk (nama, merk, harga, deskripsi, gambar, kategori) VALUES('$nama', '$merkproduk', '$harga', '$deskripsi', '$gambar', '$kategori')");
		// if (isset($sql)) {
		// 	header('location:pagecustomor.php');
		// }
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE/plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="AdminLTE/plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="AdminLTE/plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="AdminLTE/plugins/summernote/summernote-bs4.min.css" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <title>Form Input Produk</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Form Input Produk</h3>
                    </div>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" name="namaproduk" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Merk Produk</label>
                                        <input type="text" name="merkproduk" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" name="harga" rows="3" placeholder="Enter ..."></input>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea class="form-control" rows="3" name="deskripsi" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Stok</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="number" class="form-control" name="stok" id="exampleInputFile">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" onchange="loadFile(event)" class="custom-file-input" name="gambar" id="exampleInputFile">
                            
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                <select class="custom-select" name="kategori">
                                    <option value="raket">Raket</option>
                                    <option value="bags">Bags</option>
                                    <option value="shoes">Shoes</option>
                                </select>
                            </div>

                            <div class="mt-10">
                                <button type="submit" class="btn btn-success" name="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




        <!-- jQuery -->
        <!-- jQuery -->
        <script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
          <!-- jQuery UI 1.11.4 -->
          <script src="AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
          <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
          <script>
            $.widget.bridge("uibutton", $.ui.button);
          </script>
          <!-- Bootstrap 4 -->
          <script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- ChartJS -->
          <script src="AdminLTE/plugins/chart.js/Chart.min.js"></script>
          <!-- Sparkline -->
          <script src="AdminLTE/plugins/sparklines/sparkline.js"></script>
          <!-- JQVMap -->
          <script src="AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
          <script src="AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
          <!-- jQuery Knob Chart -->
          <script src="AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
          <!-- daterangepicker -->
          <script src="AdminLTE/plugins/moment/moment.min.js"></script>
          <script src="AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
          <!-- Tempusdominus Bootstrap 4 -->
          <script src="AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
          <!-- Summernote -->
          <script src="AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
          <!-- overlayScrollbars -->
          <script src="AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
          <!-- AdminLTE App -->
          <script src="AdminLTE/dist/js/adminlte.js"></script>
          <!-- AdminLTE for demo purposes -->
          <!-- <script src="admlte/dist/js/demo.js"></script> -->
          <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
          <script src="AdminLTE/dist/js/pages/dashboard.js"></script>
          <script type="text/javascript">

    $('#customFile').change(function (e) {
        if (e.target.files.length) {
            $(this).next('.custom-file-label').html(e.target.files[0].name);
        }
    });

    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
                
</body>

</html>