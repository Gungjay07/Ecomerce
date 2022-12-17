<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styleadmin.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Page Customor</title>
</head>
<style>
    html{
        scroll-behavior: smooth;
    }
    * {
        margin: 0;
        padding-left: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        width: 100%;
    }

    .navbar {
        display: flex;
        align-items: center;
        padding: 20px;
    }

    nav {
        flex: 1;
        text-align: right;
    }

    nav ul {
        display: inline-block;
        list-style-type: none;
    }

    nav ul li {
        display: inline-block;
        margin-right: 20px;
    }

    a {
        text-decoration: none;
        color: #555;
    }

    p {
        color: #555;
    }

    .container {
        max-width: 1400px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }

    .row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .col-2 {
        flex-basis: 50%;
        min-width: 300px;
    }

    .col-2 img {
        max-width: 100%;
        padding: 50px 0;

    }

    .col-2 h1 {
        font-size: 50px;
        line-height: 60px;
        margin: 25px 0;
    }

    .btn {
        display: inline-block;
        background: #ff523b;
        color: #fff;
        padding: 8px 30px;
        margin: 30px 0;
        border-radius: 30px;
        transition: background 0.05s;
    }

    .btn:hover {
        background: #563434;
    }

    .header {
        background: radial-gradient(rgb(16, 134, 112), #ffd6d6);
    }

    .header .row {
        margin-top: 70px
    }

    .categori {
        margin: 70px 0;
    }

    .col-3 {
        flex-basis: 30%;
        min-width: 250px;
        margin-bottom: 30px;
    }

    .col-3 img {
        width: 90%;
    }

    .small-container {
        max-width: 1080px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }

    .col-4 {
        flex-basis: 25%;
        padding: 10px;
        min-width: 200px;
        margin-bottom: 50px;
        transition: transform 0.90s;
    }

    .col-4 img {
        width: 100%;
    }

    .title {
        text-align: center;
        margin: 0 auto 80px;
        position: relative;
        line-height: 60px;
        color: #555;
    }

    .title::after {
        content: '';
        background: #ff523b;
        width: 80px;
        height: 5px;
        border-radius: 5px;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    h4 {
        color: #555;
        font-weight: normal;
    }

    .col-4 p {
        font-size: 14px;
    }

    .rating .fa {
        color: #ff523b;
    }

    .col-4:hover {
        transform: translateY(-5px);
    }

    /* offer */
    .offer {
        background: radial-gradient(rgb(49, 133, 70), #ffd6d6);
        margin-top: 80px;
        padding: 30px 0;
    }

    .col-2 .offer-img {
        padding: 50px;
    }

    small {
        color: #555;
    }

    /* kometar netizen */
    .testimonial {
        padding-top: 100px;
    }

    .testimonial .col-3 {
        text-align: center;
        padding: 40px 20px;
        box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: transform 0.12s;
    }

    .testimonial .col-3 img {
        width: 50px;
        margin-top: 20px;
        border-radius: 50%;
        text-align: center;
    }

    .testimonial .col-3:hover {
        transform: translateY(-4px);
    }

    .fa.fa-quote-left {
        font-size: 34px;
        color: #563434;
    }

    .brands {
        margin: 100px auto;
    }

    .col-3 {
        width: 160px;
    }

    .col-3 img {
        width: 100px;
        cursor: pointer;
        filter: grayscale(100%);
    }

    .col-3 img:hover {
        filter: grayscale(0);
    }

    .menu-icon {
        width: 20px;
        margin-left: 10px;
        display: none;
    }

    /* media */
    @media only screen and (max-width: 800px) {
        nav ul {
            position: absolute;
            top: 70px;
            left: 0;
            background: #333;
            width: 100%;
            overflow: hidden;
            transition: max-height 0.5s;
        }

        nav ul li {
            display: block;
            margin-right: 50px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        nav ul li a {
            color: #fff;
        }

        .menu-icon {
            display: block;
            cursor: pointer;
        }
    }

    .navbar i {
        width: 100px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
        transform: translateX(-120px);
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .col-4 button {
        display: inline-block;
        color: #3f8457;
        border: none;
        border-radius: 5px;
        transition: background 0.05s;
        background: #f9f9f9;
        width: 100px;
        height: 20px;
    }
</style>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == 'input') {
            echo '<script>
            alert("Produk berhasil Di Input");</script>';
        } elseif ($pesan == 'update') {
            echo '<script>
            alert("Produk Di Update");</script>';
        } elseif ($pesan == 'delete') {
            echo '<script>
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
                        <li id="MenuItems"><a href="pagecustomor.php">Home</li></a>
                        <li><a href="#produk">Product</li></a>
                        <li><a href="about.php">About</li></a>
                        <li><a href="test.html">Contact</li></a>
                        <li><a href="test.html">Account</li></a>

                    </ul>
                    <a href="buynow.php"><i class="bi bi-basket3"></i></a>

                    <!-- <i class="bi bi-box-</a>arrow-in-left"></i> -->
                </nav>


                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit.</h1>
                    <p>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius<br> sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem.</p>
                    <a href="#produk" class="btn">Explore Now &#8594;</a>
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
                    if ($data['kategori'] == 'raket') {

                ?>

                <div class="col-4">
                    <img src="images/<?= $data['gambar'] ?>">
                    <h4><?= $data['nama'] ?></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-half-o"></i>

                    </div>
                    <p>Rp.<?= number_format($data['harga'], 2) ?></p>
                    <p>Stok <?= $data['stok'] ?></p>

                    <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#beli<?= $data['id']; ?>"
                        data-bs-whatever="@mdo">Buy Now</a>

                </div>
                <div class="modal fade" id="beli<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                <buttown type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="transaksi.php" enctype="multipart/form-data">
                                    <div class="mb-3">
                                     
                                        <label for="recipient-name" class="col-form-label">Nama Barang</label>
                                        <br>
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <label for="recipient-name" name='nama'
                                            class="col-form-label"><?= $data['nama']; ?>
                                            </label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Merek</label>
                                        <br>
                                        <label for="recipient-name" name='merek'
                                            class="col-form-label"><?= $data['merk']; ?></label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Harga</label>
                                        <br>
                                        <label for="recipient-name" name='harga'
                                            class="col-form-label" ><?= number_format($data['harga'], 2); ?></label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Stok</label>
                                        <br>
                                        <label for="recipient-name" name='stok'
                                            class="col-form-label"><?= $data['stok']; ?></label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Mau berapa banyak ?</label>
                                        <br>
                                        <input for="recipient-name" name="stok" type="number" class="col-form-label"></input>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        &nbsp;
                                        <button type="submit" class="btn btn-primary" name="submit" value="simpan">Next</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
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
                    if ($data['kategori'] == 'shoes') {

                ?>

                <div class="col-4">
                    <img src="images/<?= $data['gambar'] ?>">
                    <h4><?= $data['nama'] ?></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rp.<?= number_format($data['harga'], 2) ?></p>
                    <p>Stok <?= $data['stok'] ?></p>

                    <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#beli<?= $data['id']; ?>"
                        data-bs-whatever="@mdo">Buy Now</a>

                </div>
                <div class="modal fade" id="beli<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="transaksi.php" enctype="multipart/form-data">
                                    <div class="mb-3">
                                     
                                        <label for="recipient-name" class="col-form-label">Nama Barang</label>
                                        <br>
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <label for="recipient-name" name='nama'
                                            class="col-form-label"><?= $data['nama']; ?>
                                            </label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Merek</label>
                                        <br>
                                        <label for="recipient-name" name='merek'
                                            class="col-form-label"><?= $data['merk']; ?></label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Harga</label>
                                        <br>
                                        <label for="recipient-name" name='harga'
                                            class="col-form-label" ><?= number_format($data['harga'], 2); ?></label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Stok</label>
                                        <br>
                                        <label for="recipient-name" name='stok'
                                            class="col-form-label"><?= $data['stok']; ?></label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Mau berapa banyak ?</label>
                                        <br>
                                        <input for="recipient-name" name="stok" type="number" class="col-form-label"></input>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        &nbsp;
                                        <button type="submit" class="btn btn-primary" name="submit" value="simpan">Next</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
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
                    if ($data['kategori'] == 'bags') {

                ?>

                <div class="col-4">
                    <img src="images/<?= $data['gambar'] ?>">
                    <h4><?= $data['nama'] ?></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rp.<?= number_format($data['harga'], 2) ?></p>
                    <p>Stok <?= $data['stok'] ?></p>
                    <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#beli<?= $data['id']; ?>"
                        data-bs-whatever="@mdo">Buy Now</a>

                </div>
                <div class="modal fade" id="beli<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="transaksi.php" enctype="multipart/form-data">
                                    <div class="mb-3">
                                     
                                        <label for="recipient-name" class="col-form-label">Nama Barang</label>
                                        <br>
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <label for="recipient-name" name='nama'
                                            class="col-form-label"><?= $data['nama']; ?>
                                            </label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Merek</label>
                                        <br>
                                        <label for="recipient-name" name='merek'
                                            class="col-form-label"><?= $data['merk']; ?></label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Harga</label>
                                        <br>
                                        <label for="recipient-name" name='harga'
                                            class="col-form-label" ><?= number_format( $data['harga'], 2); ?></label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Stok</label>
                                        <br>
                                        <label for="recipient-name" name='stok'
                                            class="col-form-label"><?= $data['stok']; ?></label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Mau berapa banyak ?</label>
                                        <br>
                                        <input for="recipient-name" name="stok" type="number" class="col-form-label"></input>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        &nbsp;
                                        <button type="submit" class="btn btn-primary" name="submit" value="simpan">Next</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
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
    </div> -->
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
    </div>

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
    <!-- <div class="brands">
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
    </div> -->
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</body>

</html>