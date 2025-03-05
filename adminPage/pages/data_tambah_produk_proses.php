<?php 
        include '../koneksi.php';

        // menangkap name Submit means setelah di pencet submit 
        if(isset($_POST['tambah_produk'])) {
                // bikin variabel untuk nangkep name yang diinputkan 
                $id_produk = $_POST['id_produk'];
                $kategori_id = $_POST['kategori_id'];
                $nama = $_POST['nama'];
                $harga = $_POST['harga'];
                $detail = $_POST['detail'];
                $ketersediaan_stok = $_POST['ketersediaan_stok'];

                $foto_tmp = $_FILES['foto']['tmp_name'];
                $foto_name = $_FILES['foto']['name'];
           
                move_uploaded_file($foto_tmp, 'pages/produk/'.$foto_name);
                
                // var_dump($_FILES);
                // die;
    

                if(empty($id_produk) || empty($kategori_id) || empty($nama) || empty($harga) || empty($foto_name) || empty($detail) || empty($ketersediaan_stok)){

                echo "
                <script type='text/javascript'>
                alert('Data harus diisi semuanya!');
                window.history.back();
                </script>
                ";
            }
            else{
                $query_simpan = "INSERT INTO produk (id_produk, kategori_id, nama, harga, foto, detail, ketersediaan_stok ) values('$id_produk', '$kategori_id','$nama', '$harga', '$foto_name', '$detail', '$ketersediaan_stok')";
                $simpan = mysqli_query($koneksi, $query_simpan);
                echo " <script type='text/javascript'>
                alert('Data Berhasil Ditambahkan!');
                window.history.back();
                </script>
                ";
            }
            header('Location: ./admin.php');
        }
?>