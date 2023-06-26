<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Page Admin</title>
</head>

<body>
<?php
    IF(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == 'input'){
            echo'<script>
            alert("Produk berhasil Di Input");</script>';
        }elseif($pesan == 'update'){
            echo'<script>
            alert("Produk Berhasil Di Update");</script>';
        }elseif($pesan == 'delete'){
            echo'<script>
            alert("Produk Berhasil Di Delete");</script>';
        }
    }  
    ?>
    
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" width="120px">
                </div>
                <nav>
                    <ul>
                        <li id="MenuItems"><a href="pageadmin.php">Home</li></a>
                        <li><a href="#produk">Product</li></a>
                        <li><a href="about.php">About</li></a>
                        <li><a href="test.html">Contact</li></a>
                        <li><a href="test.html">Account</li></a>
                        <li>
                            <div class="dropdown">
                                <i class="bi bi-gear"></i>
                                <div class="dropdown-content">
                                   <ul> 
                                    <li><a href="input-produk.php">Add Product</a></li>
                                    <li><a href="">Update</a></li>
                                    <li><a href="">Delete</a></li>
                                </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>

                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit.</h1>
                    <p>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius<br> sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem.</p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
            </div>
        </div>
    </div>
    <!-- !----Kategori SHOES Kategori-----! -->

    <div class="categori" id="produk">
        <div class="small-container">
            <h2 class="title">Racquets Product</h2>
            <div class="row">
                <?php 
                 include 'koneksi.php';
             
                 $query_mysqli = mysqli_query($koneksi, "SELECT*FROM produk");
                 while ($data = mysqli_fetch_array($query_mysqli)) {
                    if($data['kategori']== 'raket'){

                ?>
                
                <div class="col-4">
                    <img src="images/<?=$data['gambar']?>">
                    <h4><?=$data['nama']?></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rp.<?=number_format($data['harga'],2)?></p>
                    <a href="formupdate.php?no=<?= $data['id'] ?>" class="btn btn-outline-success justify-content-center" >Update</a>
                </div>
          <?php 
                    }
        
        } ?>
          
               
            </div>
        </div>
    </div>

    <div class="categori" id="produk">
        <div class="small-container">
            <h2 class="title">Shoes Product</h2>
            <div class="row">
                <?php 
                 include 'koneksi.php';
             
                 $query_mysqli = mysqli_query($koneksi, "SELECT*FROM produk");
                 while ($data = mysqli_fetch_array($query_mysqli)) {
                    if($data['kategori']== 'shoes'){
                        
                ?>                
                <div class="col-4">
                    <img src="images/<?=$data['gambar']?>">
                    <h4><?=$data['nama']?></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rp.<?=number_format($data['harga'],2)?></p>
                    <a href="formupdate.php?no=<?= $data['id'] ?>" class="btn btn-outline-success justify-content-center" >Update</a>
                </div>
          <?php 
                    }
        
        } ?>
          
               
            </div>
        </div>
    </div>

    <div class="categori" id="produk">
        <div class="small-container">
            <h2 class="title">Bags Product</h2>
            <div class="row">
                <?php 
                 include 'koneksi.php';
              
                 $query_mysqli = mysqli_query($koneksi, "SELECT*FROM produk");
                 while ($data = mysqli_fetch_array($query_mysqli)) {
                    if($data['kategori']== 'bags'){

                ?>
                
                <div class="col-4">
                    <img src="images/<?=$data['gambar']?>">
                    <h4><?=$data['nama']?></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rp.<?=number_format($data['harga'],2)?></p>
                    <a href="formupdate.php?no=<?= $data['id'] ?>" class="btn btn-outline-success justify-content-center" >Update</a>
                </div>
          <?php 
                    }
        
        } ?>
          
               
            </div>
        </div>
    </div>
    <!-- !----Kategori BAGS Produk----! -->
    <!-- <div class="small-container">
        <h2 class="title">Bags Product</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/tas5.jpg">
                <h4>PRO TOURNAMENT BAG</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/tas1.jpg">
                <h4>PRO WIDE OPEN RACQUET</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/tas3.jpg">
                <h4>PRO WIDE OPEN RACQUET</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/tas4.jpg">
                <h4>PRO BACKPACK L</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-"></i>
                </div>
                <p>$1000</p>
            </div>
        </div>
        <h2 class="title">Shoes Product</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/sepatu5.jpg">
                <h4>POWER CUSHION INFINITY</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/sepatu7.jpg">
                <h4>POWER CUSHION AERUS Z MEN</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/sepatu8.jpg">
                <h4>POWER CUSHION CASCADE 2</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/sepatu9.jpg">
                <h4>POWER CUSHION ECLIPSION</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/sepatu3.jpg">
                <h4>POWER CUSHION 88 DIAL</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/sepatu10.jpg">
                <h4>POWER CUSHION COMFORT Z</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/sepatu2.jpg">
                <h4>POWER CUSHION COMFORT Z</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-"></i>
                </div>
                <p>$1000</p>
            </div>
            <div class="col-4">
                <img src="images/sepatu.jpg">
                <h4>POWER CUSHION 88 DIAL</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-"></i>
                </div>
                <p>$1000</p>
            </div>
        </div>
    </div>

    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/momota.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Lorem Ipsum is simply dummy text of.</p>
                    <h1>Lorem Ipsum</h1>
                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>

            </div>
        </div>
    </div> -->

    <!-- Komentar -->

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa f a-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <img src="images/user-1.png">
                        <h3>Dewi Santoso</h3>
                    </div>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <img src="images/user-2.png">
                        <h3>Rahmat Widjaja</h3>
                    </div>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <img src="images/user-3.png">
                        <h3>Luhut Binsar</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col3">
                    <img src="images/logo.png">
                </div>
                <div class="col3">
                    <img src="images/lining.jpg">
                </div>
                <div class="col3">
                    <img src="images/viktor.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>

</html>