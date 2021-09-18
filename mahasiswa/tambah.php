<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>

	<?php 

	include '../config/koneksi_db.php';

	session_start();
	if ($_SESSION['status']!= "login") {
		# code...
		header("location:../index.php");
	}

	 ?>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
		<div class="container">
		  <span>Hai, <?= $_SESSION['username']?></span>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="tambah.php">Daftar</a>
		      </li>
		      
		      <li class="nav-item">
		        <a href="../config/act_logout.php" class="nav-link btn btn-danger" onclick="return confirm('Apakah anda ingin keluar?')">Logout</a>
		      </li>
		    </ul>
		  </div>
	  	</div>
	</nav>

	<!-- content -->
	<div class="container">
		<h3 class="text-center mt-3">Daftar Mahasiswa Baru</h3>

		<div class="row">
			<div class="col-12 col-md-4 col-lg-4">
				<form class="form" action="../config/act_daftar.php" method="post">
					<div class="form-group">
						<label>Nama :</label>
						<input required="" placeholder="Masukan nama" type="text" name="nama" class="form-control">
					</div>

					<div class="form-group">
						<label>Tanggal lahir :</label>
						<input required="" type="date" name="tanggal" class="form-control">
					</div>

					<div class="form-group">
						<label>Jenis kelamin</label>
						<select class="form-control" name="jenkel" required="">
							<option value="Pria">Pria</option>
							<option value="Wanita">Wanita</option>
						</select>
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<textarea required="" placeholder="Masukan alamat" name="alamat" class="form-control"></textarea>	
					</div>

					<div class="form-group">
						<label>Jurusan</label>
						<select class="form-control" required="" name="jurusan">
							<option value="Informatika">Informatika</option>
							<option+ value="Teknik sipil">Teknik sipil</option>
							<option value="Arsitektur">Arsitektur</option>
							<option value="Elektronika">Elektronika</option>
						</select>	
					</div>

					<input type="submit" value="Daftar" name="daftar" class="btn btn-success w-100">
					
				</form>
				
			</div>	

			<div class="col-12 col-md-8 col-lg-8 hidden">
				
			</div>
		</div>
		
	</div>
	

</body>
</html>