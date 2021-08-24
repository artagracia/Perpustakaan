<?php 
	include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Perpustakaan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="tambah.php">Tambah</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="out.php">Logout</a>
                </li>
            </ul>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2>Tambah Buku</h2>
		
		<hr>
		
		<?php
		if(isset($_POST['submit'])){
			$bukuID			= $_POST['id'];
			$judul			= $_POST['judul'];
			$penerbit	    = $_POST['penerbit'];
			$pengarang		= $_POST['pengarang'];
			
			$cek = mysqli_query($con, "SELECT * FROM buku WHERE id='$id'") or die(mysqli_error($con));
			
			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($con, "INSERT INTO buku(id, judul, penerbit, pengarang) VALUES('$id', '$judul', '$penerbit', '$pengarang')") or die(mysqli_error($con));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="tambah.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, ID Buku sudah terdaftar.</div>';
			}
		}
		?>
		
		<form action="tambah.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ID Buku</label>
				<div class="col-sm-10">
					<input type="text" name="bukuID" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul</label>
				<div class="col-sm-10">
					<input type="text" name="judul" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penerbit</label>
                 <div class="col-sm-10">
                    <input type="text" name="penerbit" class="form-control" required>
                </div>
			</div>
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengarang</label>
                 <div class="col-sm-10">
                    <input type="text" name="pengarang" class="form-control" required>
                </div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>