<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css">
<style type="text/css">
    table {
        margin-top: 10px;
        margin-left: 10px;
        text-align: center;
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        font-size: 15px;
        font-family: 'Poppins'
    }
    button {
        padding: 5px;
    }
</style>

<script type="text/javascript">
function hapus(id, nama) {
    var jawab = confirm("Hapus "+nama+"?");
    if (jawab==true) {
        document.location="proses_hapus.php?id="+id;
    }
}
</script>

<form method="post" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
       
       <textarea class="form-control" name="pencarian" autocomplete="OFF"></textarea>
       <input type="submit" name="submit" class="btn btn-primary"></input>

       <?php
           if (isset($_POST['submit'])) {
       
               $e = $_POST['pencarian'];
               header('Location: ?page=tampil&pencarian='.$e);
           }
       ?>
       
   </form>

<div class="table-responsive">
<table class="table table-hover table-bordered" style="margin-left:auto;margin-right:auto" border="1">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Ekskul Pilihan</th>
            <th>Status Pendaftaran</th>
        </tr>

    <?php
    if(isset($_SESSION['level'])){
        if($_SESSION['level'] == "3"){
            $SesUser = $_SESSION['userid'];
            $query = "SELECT * FROM ((pendaftaran INNER JOIN siswa ON siswa.userid = pendaftaran.userid) INNER JOIN ekskul ON pendaftaran.idekskul=ekskul.id) WHERE siswa.userid = '$SesUser'";
        }elseif($_SESSION['level'] == "2"){
            $SesEkskul = $_SESSION['ekskul'];
            $query = "SELECT pendaftaran.id as id, pendaftaran.nama, pendaftaran.kelas, jurusan.nama_jurusan, pendaftaran.tujuan,
            pendaftaran.no_hp, pendaftaran.status_pendaftaran, ekskul.nama_ekskul FROM pendaftaran JOIN ekskul ON pendaftaran.ekskul=ekskul.id
            JOIN jurusan ON pendaftaran.jurusan=jurusan.id WHERE pendaftaran.ekskul like '$SesEkskul'";            
        }else{
            $query = "SELECT * FROM ((pendaftaran INNER JOIN siswa ON siswa.userid = pendaftaran.userid) INNER JOIN ekskul ON pendaftaran.idekskul=ekskul.id)";
        }
    }

    $queryDB = mysqli_query ($mysqli, $query);
    $no_tabel = 0;

    while ($data2=mysqli_fetch_array($queryDB)) {
        $no_tabel++;
        echo "<tr><td>$no_tabel<td>$data2[nama_lengkap]<td>$data2[kelas]<td>
        $data2[alamat]<td>$data2[no_hp]<td>$data2[nama_ekskul]<td>$data2[status_pendaftaran]";
    ?>
    

        
        </tr>
    <?php
    }
    ?>
</table>
<br />
</div>