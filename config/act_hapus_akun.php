<?php
include 'koneksi_db.php';


$dataID = $_GET['id'];

$sql = mysqli_query($conn,"DELETE FROM user WHERE id_user = '$dataID' ");

if ($sql) {
	# code...
	header("location:../admin/data_user.php");
}else{
	echo "gagal";
}
?>