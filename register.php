<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="nis">NIS:</label>
            <input type="text" name="nis" id="nis">
        <div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
        <div>
        <div>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat">
        <div>
        <div class="form-group">
	    <label for="jurusan">Jurusan</label>
		<select class="form-control" id="jurusan" name="jurusan">
        <?php 
            include("koneksi.php");
			$jurusan = mysqli_query($conn, "SELECT * FROM jurusan");
			if($page=="edit") {
				while($value = mysqli_fetch_array($jurusan)) { ?>
					<option value="<?= $value['id'] ?>" <?= $data['jurusan'] == $value['id'] ? 'selected' : '' ?>><?= $value['nama_jurusan'] ?></option>
				<?php } } 
			else {
				while($value = mysqli_fetch_array($jurusan)) { 
					echo '<option value="'.$value['id'].'">'.$value['nama_jurusan'].'</option>';
				}
			} ?>
        </select>
	  </div>
        <div>
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" id="kelas">
        <div>
        <div>
            <label for="nomor">No Telepon:</label>
            <input type="text" name="nomor" id="nomor">
        <div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="username" name="username" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>
</body>
</html>