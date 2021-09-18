<?php
include 'koneksi_db.php';

if (isset($_POST['register'])) {
	# code...
	$username = $_POST['username'];
	$role = $_POST['role'];
	$password = md5($_POST['password']);

}


$sql = mysqli_query($conn,"INSERT INTO user VALUES ('','$username','$password','$role') ");

if ($sql) {
	# code...
	header("location:../index.php");
}else{
	echo "gagal";
}
?>