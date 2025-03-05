<?php 
include_once ("koneksi.php");
$id_produk = $_GET['id_produk'];
$join = "SELECT * FROM produk 
 join kategori on kategori.kategori_id = produk.kategori_id WHERE id_produk = '$id_produk'";

$result = $koneksi->query($join);

// $result = mysqli_query($koneksi, $join);
$produk = $result->fetch_assoc();
// $produk = mysqli_fetch_array($result);
// $produk = $result->fetch_assoc();

?>

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
    <link href="css/details.css" rel="stylesheet">
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
              <a class="btn btn-secondary" href="#">Login</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container cashier-header ">
        <div class="detail-container">
            <div class="image-detail">
                <img src="assets/produk/lifecat.png" alt="produk-image" >
            </div>
            <div class="content-detail">
                <div class="upper-content-detail">
                    <h1><?php echo $produk['nama']?></h1>
                    <p>Rp.<?php echo $produk['harga']?>-,</p>
                </div>
                <div class="desc-detail">
                    <h5>Description</h5>
                    <p><?php echo $produk['detail']?></p>
                </div>
                <button class="btn-detail-back"><a href="index.php">Kembali</a></button>
            </div>
        </div>

    </div>
</body>
</html>