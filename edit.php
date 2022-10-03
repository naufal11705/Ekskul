<?php

$nis = $_GET['nis'];
$data = mysqli_query($mysqli, "select * from pendaftaran where id = $nis");

while($data2 = mysqli_fetch_array($data)) {
?>

<style type="text/css">
#form{margin-left: 10px;}
#form label{
    width:60px;
    float: left;
}
</style>
<div id="form">
    <h3>Edit Data</h3>
    <form action="proses_edit.php" method="post">
        <label>NIS</label><input type="text" name="nis" readonly="1"
        value="<?php echo "$data2[nis]"; ?>"/></br>
        <label>Nama</label><input type="text" name="nama"
        value="<?php echo "$data2[nama]"; ?>"/></br>
        <label>Jurusan</label><input type="text" name="jurusan"
        value="<?php echo "$data2[jurusan]"; ?>"/></br>
        <label>Alamat</label><input type="text" name="alamat"
        value="<?php echo "$data2[alamat]"; ?>"/></br>
        <input type="submit" name="simpan" value="Simpan"/>
    </form>
</div>
<?php
}
?>