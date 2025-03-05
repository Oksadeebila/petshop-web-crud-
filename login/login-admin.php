<?php
require "../koneksi.php";
    session_start();
    if(isset($_POST['login_admin'])){
        $username = $_POST['admin_uname'];
        $pass = $_POST['admin_password'];

        $data = mysqli_query($koneksi, "SELECT * FROM admin WHERE admin_uname = '$username' AND admin_password = '$pass'");

        if(mysqli_num_rows($data) === 1){
            header ("location:../adminPage/admin.php");
        } else {
            echo "admin tidak ada";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>halaman awal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">


    
</head>


<body>
    <form action="" method="post">

    
    <form method="post">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
            <div class="logo"></div>
            <div class="login-block">
            <h1>LOGIN ADMIN</h1>
            <input type="" name="admin_uname" value="" placeholder="Username" id="admin_uname" />
            <input type="" name="admin_password" value="" placeholder="password" id="admin_password" />
            <button name="login_admin" type="submit">Login</button>
        </div>
    </form>

    <div style="margin: top 80px;">
        <!-- <img src="image/foto-ijazah.jpg"> -->
    </div>

    </div>
  </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
