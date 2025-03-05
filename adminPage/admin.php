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
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/details.css" rel="stylesheet">
    <link href="../css/form-edit.css" rel="stylesheet">
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
              <a class="nav-link" href="admin.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#produk">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php?p=tambah_form">Tambah Produk</a>
            </li>
  

          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="btn btn-secondary" href="/petshop-web/index.php">Keluar</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <div class="content">
            <?php
            // buat pages direktori
                $pages_dir = 'pages'; 
            // kodisi jika nilai p tidak kosong
                if(!empty($_GET['p'])) {
                    $pages = scandir($pages_dir, 0);
                    unset($pages['0'], $pages['1']);
                    $p = $_GET['p'];

                    if(in_array($p.'.php', $pages)) {
                        include($pages_dir.'/'.$p.'.php');
                    }else 
                    {
                        echo "Oops! Halaman tidak ditemykan";
                    }

                } else {
                    include($pages_dir.'/home.php');
                }
            ?>
        </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>