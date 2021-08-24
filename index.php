<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo " ";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}?>
	<form method="post" action="login.php">
		<div class="container p-3 my-3 border">
			<div class="alert alert-primary" align="center">
				<h4><strong>Selamat Datang!</strong></h4>
				<table>
				<div class="col-md-4">
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" class="form-control" name="username" id="validationCustom01" placeholder="Masukkan username" required></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="text" class="form-control" name="password" id="validationCustom01" placeholder="Masukkan password" required></td>
					</tr>
				</div>
				<div class="col-12">
					<tr>
						<td></td>
						<td></td>
						<td><button class="btn btn-primary" type="submit">Submit</button></td>
					</tr>
				</div>
				</table>			
			</div>
		</div>
	</form>

</body>
</html>