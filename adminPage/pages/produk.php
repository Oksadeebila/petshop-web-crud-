
<body>
    <div class="mx-4 mt-4 d-flex">
        <h2 style="align-item: center;" class="title-page">Halaman Data Produk</h2>
        <!-- <div class="tambahMahasiswa" style="margin: 10px;"> 
            <button type="button" class="btn btn-dark"><a class='tambah_mhs' color="black" href=index.php?p=data_mahasiswa_add>+TAMBAH MAHASISWA</a></button>
        </div> -->
    </div>
   
    <div class="mx-4 ">
    <table cellpadding="2" cellspacing="2" width="100%">
        <!-- untuk bikin head -->
        <tr class="head-table">
            <th>N0</th>
            <th>Kode</th>
            <th>Kategori</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Detail</th>
            <th>Ketersediaan Stok</th>
            <th width=>Action</th>
        </tr>
        <?php
        include_once ("../koneksi.php");
        $result = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY nama");
        $no = 1;
        $warna_ganjil = "";
        $warna_genap =""; 
        while($row = mysqli_fetch_array($result)) {
            if($no % 2 == 0) {
                $color = $warna_genap;
            } else {
                $color = $warna_ganjil;
            }
        ?>
            <tr class="view" bgcolor="<?=$color;?>">
                <td><?=$no++; ?></td>
                <td><?=$row['id_produk']; ?></td>
                <td><?=$row['kategori_id']; ?></td>
                <td><?=$row['nama']; ?></td>
                <td><?=$row['harga']; ?></td>
                <td><?=$row['foto']; ?></td>
                <td><?=$row['detail']; ?></td>
                <td><?=$row['ketersediaan_stok']; ?></td>
                <td >
                    <a href="admin.php?p=data_produk_edit&id_produk=<?php
                    echo $row['id_produk']; ?>">
                    <img class="icon" src="./images/edit-img.png" width="20%"></a>
                    <a href="index.php?p=data_produk_delete&npm=<?php
                    echo $row['id_produk']; ?>">
                    <img class="icon" src="./images/delete-img.png" width="20%"></a>
                </td>
            </tr>
            <?php
            }
        ?>
    </table>
    </div>
    
    
</body>
</html>









