<style type="text/css">
#form{margin-left: 10px;}
#form label {
    width: 60px;
    float: left;
}
</style>

<div id="form">
<h3>Input Data</h3>
<form action="proses_input.php" method="post">
    <label>NIS</label><input type="text" name="nis"/><br />
    <label>Nama</label><input type="text" name="nama"/><br />
    <label>Jurusan</label><input type="text" name="jurusan"/><br />
    <label>Alamat</label><input type="text" name="alamat"/><br />
    <input type="submit" value="Tambahkan"/>
    <input type="reset" value="Hapus"/>
</form>
</div>