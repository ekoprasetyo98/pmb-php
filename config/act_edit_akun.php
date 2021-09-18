<?php 
include 'koneksi_db.php';

if (isset($_POST['edit'])) {
	# code...
	$id = $_POST['id'];
	$username = $_POST['username'];
	$role = $_POST['role'];
	$password = md5($_POST['password']);
}


$sql = mysqli_query($conn,"UPDATE user SET username = '$username', password = '$password', role = '$role' WHERE id_user = '$id' ");

if ($sql) {
	# code...
	header("location:../admin/data_user.php");
}else{
	echo "gagal";
}

 ?>