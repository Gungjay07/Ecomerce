<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
      IF(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == 'input'){
            echo'<script>
            alert("Pengaduan berhasil Di Input");</script>';
        }elseif($pesan == 'update'){
            echo'<script>
            alert("Pengaduan Di Update");</script>';
        }elseif($pesan == 'delete'){
            echo'<script>
            alert("Data Berhasil Di Delete");</script>';
        }
    }
    ?>
<div class="container-fluid">
    <div class="navbar"  style="background:#FCE9CE;">
        <div class="logo">
            <img src="images/logo.png" alt="" width="125px">
        </div>
        <nav>
                    <ul>
                        <li id="MenuItems"><a href="index.php">Home</li></a>
                        <li><a href="#produk">Product</li></a>
                        <li><a href="about.php">About</li></a>
                        <li><a href="test.html">Contact</li></a>
                        <li><a href="test.html">Account</li></a>
                        <li>
                            <div class="dropdown">
                                <i class="bi bi-gear"></i>
                                <div class="dropdown-content">
                                   <ul> 
                                    <li><a href="forminput.php">Add Product</a></li>
                                    <li><a href="tampilanupdate.php">Update</a></li>
                                    <li><a href="tampilandelete.php">Delete</a></li>
                                </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
    </div>

<!-- fitur produk -->
<div class="small-container">
    <h2 class="title">Edit produk</h2>
    <div class="row">
        <?php
         include "koneksi.php";
         $query_mysqli = mysqli_query($koneksi, "SELECT*FROM produk");
         $nomor = 1;
         while ($data = mysqli_fetch_assoc($query_mysqli)) {
      ?>
        <div class="col-4">
            <img class="img-thumbnail" lass="img-thumbnail" src="images/<?= $data['image'] ?>" alt="">
            <h4><?php echo $data['nama'] ?></h4>
            <p>Rp.<?=number_format($data['harga'],2)?></p>
            <a href="" class="btn btn-outline-success justify-content-center"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Delete</a>
        </div>
        <?php } ?>
    </div>
</div>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our aplication</h3>
                <p>download Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="footer-col-2">
              <img src="" alt="">
                <p>download Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="footer-col-3">
                <h3>Download Our aplication</h3>
              <ul>
                <li>coupons</li>
                <li>blog spot</li>
                <li>return policy</li>
                <li>join affiliate</li>
              </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
              <ul>
                <li>Facebook</li>
                <li> twitter</li>
                <li>instagram</li>
                <li>youtube</li>
              </ul>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nama Barang:</label>
                <br>
                <label for="recipient-name" class="col-form-label">tasmisalnya</label>
                
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Merek:</label>
                <br>
                <label for="recipient-name" class="col-form-label">tasmisalnya</label>
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">harga:</label>
                <br>
                <label for="recipient-name" class="col-form-label">600000</label>
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">stok:</label>
                <label for="recipient-name" class="col-form-label">150</label>
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Kuantitas:</label>
                <br>
                <input type="number" id="quantity" name="quantity" min="1" max="5">
            </div>
            <div class="mb-3 ms-1000">
                <label for="recipient-name" class="col-form-label">Gambar</label>
                <br>
            <img  src="images/logo.png" width="80px" alt="">
            </div>
        
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
        </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>