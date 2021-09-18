<?php 
include 'koneksi_db.php';


if (isset($_POST['daftar'])) {
	# code...
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$jenkel = $_POST['jenkel'];
	$alamat = $_POST['alamat'];
	$jurusan = $_POST['jurusan'];

}


$sql = mysqli_query($conn,"INSERT INTO mahasiswa VALUES ('','$nama','$jenkel','$jurusan','$alamat','$tanggal') ");

if ($sql) {
	# code...
	header("location:../admin/index.php");
}else{
	echo "gagal";
}

 ?>