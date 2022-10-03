<link rel="stylesheet" href="assets/fontawesome/css/all.css">
<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
<?php

	if(isset($_GET['page']))
	{

		if($_GET['page'] == "edit")
		{

			$tampil = mysqli_query($mysqli, "SELECT 
    				  	pendaftaran.*
    				  FROM 
    				  	pendaftaran
    				  WHERE 
					    pendaftaran.id='$_GET[id]'");


			$data = mysqli_fetch_array($tampil);
			if($data)
			{

				$vidpendaftaran			= $data['idpendaftaran'];
				$vuserid				= $data['userid'];
				$videksul 				= $data['idekskul'];
				$vtujuan 				= $data['tujuan'];
				$vstatus_pendaftaran 	= $data['status_pendaftaran'];

				
			}

		}

		elseif($_GET['page'] == 'hapus')
		{
			$tampil = mysqli_query($mysqli, "SELECT 
    				  	pendaftaran.*
    				  FROM
                        pendaftaran
    				  WHERE 
                        pendaftaran.id='$_GET[id]'");

			$data = mysqli_fetch_array($tampil);
			
			$hapus = mysqli_query($mysqli, "DELETE FROM pendaftaran WHERE id='$_GET[id]'");
			if($hapus){
				echo "<script>
						alert('Hapus Data Sukses');
						document.location='?page=tampil';
					  </script>";
			}

		}

		elseif($_GET['page'] == 'setuju')
		{

			$setuju = mysqli_query($mysqli, "UPDATE pendaftaran SET 
												status_pendaftaran 		= 'Telah disetujui'
											where id = '$_GET[id]' ");
			
			if($setuju){
				echo "<script>
						alert('Placeholder');
						document.location='?page=tampil';
					  </script>";
			}

		}

		elseif($_GET['page'] == 'tolak')
		{

			$setuju = mysqli_query($mysqli, "UPDATE pendaftaran SET 
												status_pendaftaran 		= 'Ditolak'
											where id = '$_GET[id]' ");
			
			if($setuju){
				echo "<script>
						alert('Placeholder');
						document.location='?page=tampil';
					  </script>";
			}

		}
	
	}	

	
	if(isset($_POST['bsimpan']))
	{
		
		if(@$_GET['page'] == "edit"){

			
			$ubah = mysqli_query($mysqli, "UPDATE pendaftaran SET 
												idpendaftaran           = '$_POST[idpendaftaran]',
												userid                  = '$_POST[userid]',
												idekskul                = '$_POST[idekskul]',
												tujuan 	               	= '$_POST[tujuan]',
												status_pendaftaran 		= '$_POST[status_pendaftaran]'
											where idpendaftaran = '$_GET[idpendaftaran]' ");
			
			if($ubah)
			{
				echo "<script>
						alert('Ubah Data Sukses');
						document.location='?page=tampil';
					  </script>";
			}
			else
			{
				echo "<script>
						alert('Ubah Data GAGAL!!');
						document.location='?page=tampil';
					  </script>";
			}
		}
		else
		{
			
			$simpan = mysqli_query($mysqli, "INSERT INTO pendaftaran 
											  VALUES (	'',

                                                        '$_POST[idpendaftaran]',
                                                        '$_POST[userid]',
                                                        '$_POST[idekskul]',
														'$_POST[tujuan]',
                                                        '$_POST[status_pendaftaran]'

											  		  ) ");

			if($simpan)
			{
				echo "<script>
						alert('Simpan Data Sukses');
						document.location='?page=tampil';
					  </script>";
			}else
			{
				echo "<script>
						alert('Simpan Data GAGAL!!');
						document.location='?page=tampil';
					  </script>";
			}

		}


		
	}

	

?>

	<style>
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
			font-size: 15px;
			font-family: 'Poppins'
        }
        th {
            color: black;
        }

	</style>

<div class="container">
<table class="table table-hover" border="1">
<tr>
    <th class="Lato" style="text-align:center;font-size:15px">Form Data</th>
<tr>
	<th>
		<?php
		$id = $_SESSION['userid'];
		$ambildata = mysqli_query($conn, "SELECT * FROM siswa WHERE userid = '$id'");
		$data = mysqli_fetch_array($ambildata);

		$get_id = mysqli_query($conn, "SELECT idpendaftaran FROM pendaftaran WHERE SUBSTRING(idpendaftaran,1,5)='APPLY'") or die (mysqli_error($conn));
		$trim_id = mysqli_query($conn, "SELECT SUBSTRING(idpendaftaran,-5,5) as hasil FROM pendaftaran WHERE SUBSTRING(idpendaftaran,1,5)='APPLY' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
		$hit    = mysqli_num_rows($get_id);
		if ($hit == 0){
			$id_k   = "APPLY00001";
		} else if ($hit > 0){
			$row    = mysqli_fetch_array($trim_id);
			$kode   = $row['hasil']+1;
			$id_k   = "APPLY".str_pad($kode,5,"0",STR_PAD_LEFT); 
		}
		?>
    <form method="post" action="" enctype="multipart/form-data" >
	  <div class="form-group">
	    <label for="idpendaftaran">Id Pendaftaran: <?php echo $id_k ?></label>
		<input type="hidden" id="idpendaftaran" name="idpendaftaran" value="<?php echo $id_k ?>">
	  </div>
	  <div class="form-group">
	    <label for="userid">User Id: <?php echo $_SESSION['userid'] ?></label>
		<input type="hidden" id="userid" name="userid" value="<?php echo $_SESSION['userid'] ?>">
	  </div>
	  <div class="form-group">
	    <label for="nama">Nama: <?php echo $data['nama_lengkap']; ?></label>
	  </div>
	  <div class="form-group">
	    <label for="kelas">Kelas: <?php echo $data['kelas']; ?></label>
	  </div>
	  <div class="form-group">
	    <label for="alamat">Alamat: <?php echo $data['alamat']; ?></label>
	  </div>
	  <div class="form-group">
	    <label for="no_hp">No. Hp: <?php echo $data['no_hp']; ?></label>
	  </div>
	  <div class="form-group">
	    <label for="idekskul">Ekskul</label>
		<select class="form-control" id="idekskul" name="idekskul">
        <?php 
			$ekskul = mysqli_query($conn, "SELECT * FROM ekskul");
			if($page=="edit") {
				while($value = mysqli_fetch_array($ekskul)) { ?>
					<option value="<?= $value['id'] ?>" <?= $data['ekskul'] == $value['id'] ? 'selected' : '' ?>><?= $value['nama_ekskul'] ?></option>
				<?php } }
			else {
				while($value = mysqli_fetch_array($ekskul)) { 
					echo '<option value="'.$value['id'].'">'.$value['nama_ekskul'].'</option>';
				}
			} ?>
        </select>
	  </div>	  
	  <div class="form-group">
	    <label for="tujuan">Tujuan</label>
	    <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?=@$vtujuan?>">
	  </div>
	  <?php
		if(isset($_SESSION['login'])){
			if($_SESSION['level']=="1" OR $_SESSION['level']=="2"){
				echo '	 
				<div class="form-group">
				<label for="status_pendaftaran">Status Pendaftaran</label>
				<select class="form-control" id="status_pendaftaran" name="status_pendaftaran">
					<option value="Menunggu Persetujuan">Menunggu Persetujuan</option>
					<option value="Diterima">Diterima</option>
					<option value="Ditolak">Ditolak</option>
				</select>
			  </div>';
			} else {
				echo '<label for="status_pendaftaran">Status Pendaftaran: Menunggu Persetujuan</label>';
				echo '<input type="hidden" id="status_pendaftaran" name="status_pendaftaran" value="Menunggu Persetujuan">';
			}
		}
							?>
	  <center><button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
	 	 <a href="?page=tampil" class="btn btn-danger">Batal</a></center>
	</th>	 
	</form>
</table>
</div>
  

