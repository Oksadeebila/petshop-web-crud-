<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container cashier-navbar">
        <a class="navbar-brand" href="#">Mueza PetShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#produk">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kategori">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#caraPesan">Cara Pesan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#TentangKami">Tentang Kami</a>
            </li>

          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="btn btn-secondary" href="/petshop-web/login/login-admin.php">Login</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- header -->
    <div class="container cashier-header">
      
      <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="assets/images/banner_header1.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      
      <!--Cattaloguer-->
   <!-- Categorieds -->
<?php 
  include 'koneksi.php';

  $kategori = array();
  $queryKategori = $koneksi->query("SELECT * FROM kategori");
  while($pecah = $queryKategori->fetch_assoc())
  {
    $kategori[] =$pecah;
  }
?>
      <!-- <div class="container p-3  mb-4 mt-4  shadow"> -->
      <div class="container p-3  mb-4 mt-4  shadow">
        <h3 id="kategori" class="text-center sub-title" 
        >Kategori</h3>
      <div class="container-kategori">
        <?php foreach ($kategori as $key => $value): ?>
     
           <div class="card-kategori">
            <img src="assets/icon/<?php echo $value['foto']?>" alt="Wet food" class="ikon">
            <a href="index.php?kategori_id=<?php echo $value['kategori_id']?>"><?php echo $value['nama_kategori']?></a>
           </div>

           <?php endforeach ?>
      </div> 
    </div>



    <h3 id="produk" class="text-center  sub-title" 
    >Produk</h3>
    <div class="container p-3  mb-4 mt-0   ">
      <div class="produk-container">
        <?php 
          include_once ("koneksi.php");
          $result = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY nama");
          while($row = mysqli_fetch_array($result)) {
      ?>
        <div class="produk-card">
          <div class="image-card">
            <img src="adminPage/pages/produk/<?= $row['foto'] ?>" alt="produk-image" class="produk-image" width="180px">
          </div>
          <div class="content">
            <div class="main-content">
              <h5><?= $row['harga'] ?></h5>
              <span><a href=""><?= $row['nama'] ?></a>.</span>
            </div>
            <button class="btn-detail"><a href="
            detail.php?id_produk=<?= $row['id_produk'] ?>">Detail</a></button>
          </div>
        </div>
        <?php

}
?>
        </div>
      </div>
    </div>

    <div class="container p-3  mb-4 mt-0   ">
        <h3 id="carapesan" class="text-center  sub-title">Tentang Kami</h3>
        <div class="container-caraPesan">
            <div class="container-cp">
                <h6>Toko Pertama :</h6> <br>
                <p>JL. SOKA 2 BLOK T-V no.7 RT 06/ RW 10, Kelurahan Kedung Waringin, Tanah Sereal, Kota Bogor</p>
                <h1>Pesan ke sini! </h1>
                <p class="text-center text-white">Kamu bisa order melalui whatsap ke nomor ini <a href="https://api.whatsapp.com/send?phone=6289694215697&text=Hallo,%20saya%20ingin%20pesan%20produk%20anda%201">089694215697</a> </p>
            </div>
            <div class="container-tentangKami">
                <h6>Toko Kedua :</h6> <br>
                <p>JL. SUKADAMAI INDAH NO.2 </p>
               
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>