<?php
include 'koneksi_db.php';


$dataID = $_GET['id'];

$sql = mysqli_query($conn,"DELETE FROM mahasiswa WHERE id_mhs = '$dataID' ");

if ($sql) {
	# code...
	header("location:../admin/index.php");
}else{
	echo "gagal";
}
?>