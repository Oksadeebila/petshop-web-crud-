
    <!-- header -->
    <div class="container cashier-header">
      
      <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="../assets/images/banner_header_admin.png" class="d-block w-100" alt="...">
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
  include '../koneksi.php';

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
            <img src="../assets/icon/<?php echo $value['foto']?>" alt="Wet food" class="ikon">
            <a href="admin.php?kategori_id=<?php echo $value['kategori_id']?>"><?php echo $value['nama_kategori']?></a>
           </div>

           <?php endforeach ?>
      </div> 
    </div>


    <h3 id="produk" class="text-center  sub-title" 
    >Produk</h3>
    <div class="container p-3  mb-4 mt-0   ">
     

      <div class="produk-container">
      <?php 
    include_once ("../koneksi.php");
    $result = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY nama");
    while($row = mysqli_fetch_array($result)) {
      ?>
        <div class="produk-card">
          <div class="image-card">
            <img src="pages/produk/<?= $row['foto'] ?>" alt="produk-image" class="produk-image" width="180px">
          </div>
          <div class="content">
            <div class="main-content">
              <h5><?= $row['harga'] ?></h5>
              <span><a href="../detail.php?id_produk=<?= $row['id_produk']?>"><?= $row['nama'] ?></a></span>
            </div>
            <div class="action">
            <button class="btn-detail"><a href="admin.php?p=data_produk_edit&id_produk=<?php echo $row['id_produk']; ?>">EDIT</a></button>
            <button class="btn-detail-hapus"><a href="admin.php?p=data_produk_delete&id_produk=<?php echo $row['id_produk']; ?>" onclick="return confirm('Are You Sure ?')">HAPUS</a></button>
            </div>
            
          </div>
        </div>
        <?php

        }
        ?>
        
        </div>
      </div>
    </div>