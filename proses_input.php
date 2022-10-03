<?php
include "koneksi.php";

$nis=$_POST["nis"];
$nama=$_POST["nama"];
$jurusan=$_POST["jurusan"];
$alamat=$_POST["alamat"];

mysqli_query($mysqli, "insert into datasiswa values
        ('$nis', '$nama', '$jurusan', '$alamat')")
        or die (mysqli_error($mysqli));

header("location:/dtsiswa/?page=tampil");
?>