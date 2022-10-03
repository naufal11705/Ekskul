<?php
include "koneksi.php";

$nis=$_POST["nis"];
$nama=$_POST["nama"];
$jurusan=$_POST["jurusan"];
$alamat=$_POST["alamat"];

mysqli_query($mysqli, "update datasiswa set nis='$nis', nama = '$nama',
jurusan = '$jurusan', alamat = '$alamat' where datasiswa . nis = '$nis'")
        or die (mysqli_error($mysqli));
     
header("location:index.php?page=tampil");
?>