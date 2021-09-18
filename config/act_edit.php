<?php 
include 'koneksi_db.php';

if (isset($_POST['edit'])) {
	# code...
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$jenkel = $_POST['jenkel'];
	$alamat = $_POST['alamat'];
	$jurusan = $_POST['jurusan'];

}


$sql = mysqli_query($conn,"UPDATE mahasiswa SET nama = '$nama', jenkel = '$jenkel', jurusan = '$jurusan', alamat = '$alamat', tanggal = '$tanggal' WHERE id_mhs = '$id' ");

if ($sql) {
	# code...
	header("location:../admin/index.php");
}else{
	echo "gagal";
}

 ?>