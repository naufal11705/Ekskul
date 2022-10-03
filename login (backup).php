<?php
include "koneksi.php";
session_start();
if (isset($_POST['login'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

$query = "select * from tbl_user where username ='$user'and password='$pass'";
$queryDB = mysqli_query ($mysqli, $query);
$cek = mysqli_num_rows($queryDB);
$data = mysqli_fetch_assoc($queryDB);
$ekskul = $data['pembina'];

if ($cek>0) {
    if($data['level']=="admin"){
		$_SESSION['username'] = $user;
		$_SESSION['level'] = "admin";
		header("location:index.php");
 
	}else if($data['level']=="pembina"){
		$_SESSION['username'] = $user;
		$_SESSION['level'] = "pembina";
        $_SESSION['ekskul'] = $ekskul;
		header("location:index.php");
 
	}else if($data['level']=="siswa"){
		$_SESSION['username'] = $user;
		$_SESSION['level'] = "siswa";
		header("location:index.php");

    }
    
    $getData = mysqli_fetch_array($queryDB);
    $_SESSION['name'] = $getData;
    $_SESSION['is_login'] = true;
    $_SESSION['login']=$user;

    /*if (isset($_POST['submit'])) {
        include "lib/koneksi.php";

    $e = $_POST['email'];
    $p = $_POST['password'];

    $ceklogin1 = mysqli_query($conn, "SELECT * FROM user WHERE BINARY email='$e' AND password='$p'");
    $data1 = mysqli_fetch_array($ceklogin1);
    $hit1 = mysqli_num_rows($ceklogin1);

    $ceklogin2 = mysqli_query($conn, "SELECT * FROM admin WHERE BINARY email='$e' AND password='$p'");
    $data2 = mysqli_fetch_array($ceklogin2);
    $hit2 = mysqli_num_rows($ceklogin2);

    if ($hit1 > 0) {
        $now = date('Y-m-d h:i:s');
        mysqli_query($conn, "UPDATE user SET login_terakhir = '$now' WHERE userid='$data1[userid]'");
        echo '<span class="label label-primary label-block">Login Berhasil <i class="fa fa-check"></i></span>';
        echo "<meta http-equiv='refresh' content='1;
        url=index.php?page=beranda'>";
        $_SESSION['email'] = $data1['email'];
        $_SESSION['userid'] = $data1['userid'];
        $_SESSION['password'] = $data1['password'];
        $_SESSION['level'] = 2;
    }

    if ($hit2 > 0) {
        $now = date('Y-m-d h:i:s');
        mysqli_query($conn, "UPDATE admin SET login_terakhir = '$now' WHERE id='$data2[id]'");
        echo '<span class="label label-primary label-block">Login Berhasil <i class="fa fa-check"></i></span>';
        echo "<meta http-equiv='refresh' content='1;
        url=index.php?page=beranda'>";
        $_SESSION['email'] = $data2['email'];
        $_SESSION['password'] = $data2['password'];
        $_SESSION['level'] = 1;
    }*/

    }else{
        echo "<h3 align='center'>Username atau password yang Anda masukkan salah!</h2>";
        echo "<h3 align='center'>Klik <a href='login.php'>di sini</a> untuk login kembali</h2>";
        
    }
} else {
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
<div class="login">
    <form action="" method="post" class="form-signin">
        <div class="text-center mb-4">
            <img class="mb-4" src="assets/TestIcon.png" width="150">
            <h1 class="h3 mb-3 font-weight-normal"></h1>
        </div>
        <div class="form-label-group">
            <input type="text" id="user" name="user" class="teksb" placeholder="Username" required autofocus>
            <label for="username">Username</label>
        </div>
        <div class="form-label-group">
            <input type="password" id="pass" name="pass" class="teksb" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login" name="login">Sign in</button>
    </form>
</div>
</body>
</html>
<?php
}?>








