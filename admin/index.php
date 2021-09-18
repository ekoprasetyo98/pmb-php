<!DOCTYPE html>
<html>
<head>
	<title>dashboard admin</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

	<?php 
	include '../config/koneksi_db.php';

	session_start();
	if ($_SESSION['status'] != "login") {
		# code...
		header("location:../index.php");
	}

	$data = mysqli_query($conn,"SELECT*FROM mahasiswa");
	 ?>

	 <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #cb9de0; color: #f5f5f5">
		<div class="container">
		  <span>Hai, <?= $_SESSION['username']?></span>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      
		      <li class="nav-item">
		        <a href="index.php" class="nav-link">Home</a>
		      </li>
		      <li class="nav-item">
		        <a href="data_user.php" class="nav-link">Data user</a>
		      </li>
		      <li class="nav-item">
		        <a href="../config/act_logout.php" class="nav-link btn btn-danger" onclick="return confirm('Apakah anda ingin keluar?')">Logout</a>
		      </li>
		    </ul>
		  </div>
	  	</div>
	</nav>

	 <div class="container">

	 	<section id="menu">

			<article>
				<h2 class="text-cennter">Daftar nama mahasiswa baru</h2>
				<span>Total : </span><?= mysqli_num_rows($data)?><br>

				<a href="tambah.php" class="btn btn-success mt-3 mb-3 pr-3 pl-3"><i class="bi bi-plus-lg"></i> Tambah data</a>
				<table class="table">
					<thead class="thead-light">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Tanggal lahir</th>
						<th>Jurusan</th>
						<th>Jenis kelamin</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
					</thead>

					<?php $no = 1; foreach($data as $d) :?>
					<tr>
						<td><?= $no++?></td>
						<td><?= $d['nama']?></td>
						<td><?= $d['tanggal']?></td>
						<td><?= $d['jurusan']?></td>
						<td><?= $d['jenkel']?></td>
						<td><?= $d['alamat']?></td>
						<td class="action">
							<a class="btn btn-warning" href="../admin/edit.php?id=<?= $d['id_mhs']?>" onclick="return confirm('Apakah anda ingin mengedit data?')" ><i class="bi bi-pencil-square"></i></a>
							<a class="btn btn-danger" href="../config/act_hapus.php?id=<?= $d['id_mhs']?>" onclick="return confirm('Apakah anda ingin Hapus data?')"><i class="bi bi-trash-fill"></i></a>
						</td>
					</tr>
				<?php endforeach?>
				</table>
				
			</article>
	 	</section>
		
	</div>

</body>
</html>