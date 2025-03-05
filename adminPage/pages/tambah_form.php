<?php 
include_once ("../koneksi.php");

$join = "SELECT * FROM produk 
join kategori on kategori.kategori_id = produk.kategori_id";

$result_tambah = mysqli_query($koneksi, $join);

$produk_tambah = mysqli_fetch_all($result_tambah, MYSQLI_ASSOC);
$query_kategori="SELECT * FROM kategori";
$result_kategori=mysqli_query($koneksi, $query_kategori);
$data_kategori=mysqli_fetch_all($result_kategori, MYSQLI_ASSOC);


    // var_dump($data_prodi);
?>

<div class="table-section container p-4">
            <h2>Tambah Produk</h2>
            <h2></h2>
            <div class="mt-5">
                <form action="admin.php?p=data_tambah_produk_proses" method="post" enctype="multipart/form-data">
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="id_produk">Kode Produk</label>
                        <input id="id_produk" type="text" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="id_produk">
                    </div>
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="kategori_id">Kategori Produk </label>
                        <select id="kategori" type="text" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="kategori_id">
                            <?php 
                            foreach($data_kategori as $kategori) :?>
                            <option value="<?= $kategori["kategori_id"]?>"><?= $kategori['nama_kategori']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="nama">Nama Produk</label>
                        <input id="nama" type="text" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="nama">
                    </div>
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="harga">Harga Produk </label>
                        <input id="harga" type="text" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="harga">
                    </div>
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="foto">Foto Produk</label>
                        <input id="foto" type="file" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="foto">
                    </div>
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="detail">Detail Produk</label>
                        <input id="detail" type="text" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="detail">
                    </div>
                    
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="ketersediaan_stok">Ketersediaan Stock  </label>
                        <input id="ketersediaan_stok" type="text" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="ketersediaan_stok">
                    </div>
                    
                    <div class="d-flex w-75 mt-5 justify-content-end">
                        <button class="btn btn-primary" type="submit" name="tambah_produk">Tambah</button>
                    </div>

                </form>
            </div>
        </div>


