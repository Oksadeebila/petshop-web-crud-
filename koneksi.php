<!-- create connection to mysql database -->
<?php
// create connection to mysql di dalam koneksi itu ada parameter itu localhost bla bla bla 
$koneksi = mysqli_connect ("localhost", "root", "", "db_petshop");

// check connection
if (!$koneksi) {   
    die("Koneksi gagal: " . mysqli_connect_error());
}else {
    // wcho for koneksi berhasil 
}
?>