<?php
include "koneksi.php";
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/floating-labels.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css">

    </head>

    <style>
    body {
        font-family: Poppins;
        position: absolute;
        left: 40%;
    }
    </style>

<body>
<div class="card-body">
    <div class="text-center mb-4">
        <img class="mb-4" src="assets/TestIcon.png" width="150">
        <h1 class="h3 mb-3 font-weight-normal"></h1>
    </div>
    <form method="post" action="" id="formlogin">
        <div class="form-label-group">
            <input name="email" class="form-control" placeholder="**" type="email" required="required" autocomplete="off">
            <label for="username">Email</label>
        </div>
        <div class="form-label-group">
            <input name="password" class="form-control" placeholder="**" type="password" required="required" autocomplete="off">
            <label for="password">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login" name="submit">Log in</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {

    $e = $_POST['email'];
    $p = $_POST['password'];

    $ceklogin1 = mysqli_query($conn, "SELECT * FROM siswa WHERE BINARY email='$e' AND password='$p'");
    $data1 = mysqli_fetch_array($ceklogin1);
    $hit1 = mysqli_num_rows($ceklogin1);

    $ceklogin2 = mysqli_query($conn, "SELECT * FROM pembina WHERE BINARY email='$e' AND password='$p'");
    $data2 = mysqli_fetch_array($ceklogin2);
    $hit2 = mysqli_num_rows($ceklogin2);

    $ceklogin3 = mysqli_query($conn, "SELECT * FROM admin WHERE BINARY email='$e' AND password='$p'");
    $data3 = mysqli_fetch_array($ceklogin3);
    $hit3 = mysqli_num_rows($ceklogin3);

    if ($hit1 > 0) {
        $now = date('Y-m-d h:i:s');
        mysqli_query($conn, "UPDATE siswa SET login_terakhir = '$now' WHERE userid='$data1[userid]'");
        $_SESSION['email'] = $data1['email'];
        $_SESSION['nama'] = $data1['nama_lengkap'];
        $_SESSION['userid'] = $data1['userid'];
        $_SESSION['password'] = $data1['password'];
        $_SESSION['level'] = "3";
        $getData = mysqli_fetch_array($ceklogin1);
        $_SESSION['is_login'] = true;
        $_SESSION['login']=$user;
        header("location:index.php");
    }

    if ($hit2 > 0) {
        $now = date('Y-m-d h:i:s');
        mysqli_query($conn, "UPDATE pembina SET login_terakhir = '$now' WHERE id='$data2[id]'");
        $_SESSION['email'] = $data2['email'];
        $_SESSION['nama'] = $data1['nama_lengkap'];
        $_SESSION['userid'] = $data2['id'];
        $_SESSION['password'] = $data2['password'];
        $_SESSION['level'] = "2";
        $getData = mysqli_fetch_array($ceklogin2);
        $_SESSION['is_login'] = true;
        $_SESSION['login']=$user;
        header("location:index.php");
    }

    if ($hit3 > 0) {
        $now = date('Y-m-d h:i:s');
        mysqli_query($conn, "UPDATE admin SET login_terakhir = '$now' WHERE id='$data3[id]'");
        $_SESSION['email'] = $data3['email'];
        $_SESSION['nama'] = $data1['nama_lengkap'];
        $_SESSION['id'] = $data3['id'];
        $_SESSION['password'] = $data3['password'];
        $_SESSION['level'] = "1";
        $getData = mysqli_fetch_array($ceklogin3);
        $_SESSION['is_login'] = true;
        $_SESSION['login']=$user;
        header("location:index.php");
    }
    }
    ?>
</div>
</body>
</html>








