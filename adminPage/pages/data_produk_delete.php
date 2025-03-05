<?php 
include '../koneksi.php';

$id_produk = $_GET['id_produk'];
$kueriHapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");


if ($kueriHapus ) {
    
    header('Location: ./admin.php');
}
else{
    echo "
        <script type='text/javascript'>
            alert('Data gagal dihapus!');
        </script>
    ";
}
?>