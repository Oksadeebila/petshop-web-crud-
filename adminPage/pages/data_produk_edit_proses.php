<?php 
        include  '../koneksi.php';

        // menangkap name Submit means setelah di pencet submit 
        if(isset($_POST['edit_produk'])) {
            // bikin variabel untuk nangkep name yang diinputkan 
            $id_produk = $_POST['id_produk'];
            $kategori_id = $_POST['kategori_id'];
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];
            $detail = $_POST['detail'];
            $ketersediaan_stok = $_POST['ketersediaan_stok'];
            $foto_lama = $_FILES['foto']['nama'];
   
            $foto_tmp = $_FILES['foto']['tmp_name'];
            $foto_name = $_FILES['foto']['name'];
            $foto_eror = $_FILES['foto']['error'];

            if($foto_name) {
                //hapus gambar lama 
                unlink('pages/produk/'.$foto_lama);

                   move_uploaded_file($foto_tmp, 'pages/produk/'.$foto_name);

                    $kueri = mysqli_query($koneksi,"UPDATE produk SET id_produk='$id_produk', kategori_id='$kategori_id', nama='$nama', harga='$harga', foto='$foto_name', detail='$detail', ketersediaan_stok='$ketersediaan_stok' WHERE id_produk='$id_produk'");   
                    echo 
                    " <script type='text/javascript'>
                    alert('Edit Berhasil Disimpan!');
                    window.history.back();
                    </script>
                    ";
            } else {
                $kueri = mysqli_query($koneksi,"UPDATE produk SET id_produk='$id_produk', kategori_id='$kategori_id', nama='$nama', harga='$harga', detail='$detail', ketersediaan_stok='$ketersediaan_stok' WHERE id_produk='$id_produk'");   

                echo 
                    " <script type='text/javascript'>
                    alert('Edit Berhasil Disimpan!');
                    window.history.back();
                    </script>
                    ";
            }
           
            

                }
                header('Location: ./admin.php');
             
        
                

?>

