<?php 
include_once ("../koneksi.php");
$id_produk = $_GET['id_produk'];
$join = "SELECT * FROM produk 
 join kategori on kategori.kategori_id = produk.kategori_id WHERE id_produk = '$id_produk'";

$result = mysqli_query($koneksi, $join);

// $produk = mysqli_fetch_array($result);
$produk = $result->fetch_assoc();

?>

    <div class="container cashier-header ">
      <div class="detail-container">
            <div class="image-detail">
            <img src="pages/produk/<?php echo $produk['foto']?>" alt="foto-produk" height="240px" width="240px">
            </div>
      <form action="admin.php?p=data_produk_edit_proses" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?php echo $produk['id_produk'] ?>">
            <div class="content-detail">
              <div class="input">
              <label for="nama">Nama Produk : </label><br>
              <input class="input-style w-form" type="text" name="nama" value="<?php echo $produk['nama']?>">
              </div>

              <div class="input">
              <label for="id_produk">Kode Produk : </label><br>
              <input class="input-style w-form" type="text" name="id_produk" value="<?php echo $produk['id_produk'] ?>">
              </div>

              <div class="input">
              <label for="kategori_id">Kategori Produk : </label><br>
              <select id="kategori" type="text" class="input-style w-form" aria-describedby="basic-addon1" required name="kategori_id" > 
                    <?php
                             $query_kategori="SELECT * FROM kategori";
                             $sql_kategori=mysqli_query($koneksi,$query_kategori);
                    while ($data_kategori=mysqli_fetch_array($sql_kategori)) {
                      if ($produk['kategori_id']==$data_kategori['kategori_id']) {
                      $select="selected";
                      }else{
                      $select="";
                      }
                      echo "<option $select>".$data_kategori['kategori_id']."</option>";
                    }
                    ?> 
                </select>
              </div>

              <div class="input">
              <label for="harga">Harga Produk : </label><br>
              <input class="input-style w-form" type="text" name="harga" value="<?php echo $produk['harga']?>">
              </div>

              <div class="input">
              <label for="foto">File Foto : </label><br>
                <input  type="file" name="foto" value="pages/produk/<?php $produk['foto'] ?>">  
                <input  type="hidden" name="fotolama" value="pages/produk/<?php $produk['foto'] ?>">  
                </div>

                <div class="input">
              <label for="ketersediaan_stok">Ketersediaan Stok : </label><br>
              <input class="input-style " type="text" name="ketersediaan_stok" value="<?php echo $produk['ketersediaan_stok']?>">

              </div>
              <div class="input">
              <label for="detail">Deskripsi Produk : </label><br>
              <textarea class="input-style " type="text" name="detail" row="8" cols="40">"<?php echo $produk['detail']?>"</textarea>
              </div>

              
                <button class="btn-detail-back" name="edit_produk" type="submit">Simpan</button>
              
            </div>
            </form>
        </div>

    </div>

                



