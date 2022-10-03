<?php
session_start();

    if(isset($_SESSION['login'])){
    }
    else
    {
        $_SESSION['nama'] = "guest";
		$_SESSION['level'] = "4";
    }

    if(isset($_GET['pesan'])){
		die ("<h4>Anda tidak berhak masuk
        ke halaman ini.
        Silahkan login <a href='login.php'>di sini</a><h4>");
	}

    include "koneksi.php";
    include "header.php";



?>

<?php

isset ($_GET["page"])?$page=$_GET["page"]:$page="";

if ($page=="") {
    include "beranda.php";
} elseif ($page=="input") {
    include "input.php";
} elseif ($page=="tampil") {
    include "tampil.php";
} elseif ($page=="edit") {
    include "input.php";
} elseif ($page=="hapus") {
    include "input.php";
} elseif ($page=="setuju") {
    include "input.php";
} elseif ($page=="tolak") {
    include "input.php";
} else {
    echo "Halaman Tidak Ditemukan";
}

?>