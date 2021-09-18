<!DOCTYPE html>
<html>
<head>
	<title>Ini halaman utama</title>
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

	$data = mysqli_query($conn,"SELECT*FROM mahasiswa");

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
		        <a href="../config/act_logout.php" class="nav-link btn btn-danger pr-3 pl-3" onclick="return confirm('Apakah anda ingin keluar?')">Logout</a>
		      </li>
		    </ul>
		  </div>
	  	</div>
	</nav>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="../assets/img/bg1.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-lg-block">
	        <h5>Mau kuliah dengan biaya murah??</h5>
	        <p>Mari bergabung berama kami!. <a href="tambah.php" class="btn">Daftar</a></p>

	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="../assets/img/bg2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Kuliah sambil bekerja? Kenapa tidak!</h5>
	        <p>Some representative placeholder content for the first slide.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="../assets/img/bg3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Cek nama kamu apakah sudah terdaftar</h5>
	        <p>Some representative placeholder content for the first slide.</p>
	      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>


	<!-- content -->
	<div class="container">
		<h1 class="text-center mt-3">informasi pendaftaran</h1>
		<p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<table class="table mt-3">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Tanggal Lahir</th>
		      <th scope="col">Juruan</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $no=1; foreach ($data as $d):?>
		    <tr>
		      <th scope="row"><?php echo $no++ ?></th>
		      <td><?php echo $d['nama'] ?></td>
		      <td><?php echo $d['tanggal']; ?></td>
		      <td><?php echo $d['jurusan'] ?></td>
		    </tr>
		<?php endforeach ?>
		  </tbody>
		</table>
	</div>

</body>
</html>