<?php
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($mysqli, "delete from pendaftaran where id=$id")
    or die (mysql_error());

    header("location:/dtsiswa/?page=tampil");
?>