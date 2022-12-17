<?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysqli = mysqli_query($koneksi, "SELECT*FROM transaksi INNER JOIN produk ON transaksi.produk_id = produk.id WHERE transaksi.id='$id'");
    // print_r($id);
    // die;
    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
   
    <div class="container">
        <div class="row">
            <div class="col-12 d-block m-auto">
                <?php foreach ($query_mysqli as $d):
            ?>
                <div class="card mt-5">
                    <div class="card-header bg-success ">
                        <h5 class="text-light fw-bold text-center fs-5"> Struk beli</h5>
                    </div>
                    <div class="card-body">
                        <div class="row border-bottom">
                            <div class="col-12 d-flex py-2 pt-0">
                                <h6 class="me-1 fw-bold text-dark">Nama barang :</h6>
                                <h6> <?= $d['nama']?></h6>
                            </div>

                        </div>
                        <div class="row border-bottom border-top">
                            <div class="col-6 d-flex border-end py-2">
                                <h6 class="me-1 fw-bold text-dark ">merek :</h6>
                                <h6><?= $d['merk']?></h6>
                            </div>
                            <div class="col-6 d-flex py-2">
                                <h6 class="me-1 fw-bold text-dark">jumlah beli :</h6>
                                <h6> <?= $d['jumlah']?></h6>
                            </div>

                        </div>
                        <div class="row border-bottom border-top">
                            <div class="col-12 py-2">
                                <h6 class="me-1 fw-bold text-dark">total harga : </h6>
                                
                                <h6> Rp.<?=number_format($d['total'],2)?></h6>
                            </div>
                        </div>
                        <div class="row border-top">
                            <div class="col-6 py-2">
                                <h6 class="me-1 fw-bold text-dark">foto :</h6>
                                <img class="rounded-3" src="images/<?= $d['gambar']?>" width="50%" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-outline-success justify-content-right" id="cetak">Print</a>
                        <a href="pagecustomor.php" class="btn btn-outline-success justify-content-right">Close</a>
                    </div>
                  
                    <div class="card-footer text-light text-center bg-success">
                        <h5>@ YONEX-GUNGJAY</h5>
                    </div>
                </div> 
                

                <?php  endforeach; ?>
            </div>
        </div>
       
    </div>
    <script type="text/javascript">
       document.getElementById("cetak").onclick = function() {
            // printElement(document.getElementById("cetak"));
            window.onafterprint = window.close;
            window.print();
        }
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>