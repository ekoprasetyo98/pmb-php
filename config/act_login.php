<?php
include 'koneksi_db.php';

if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['username'];
	$password = md5($_POST['password']);
}

$sql = mysqli_query($conn,"SELECT*FROM user WHERE username= '$username' AND password = '$password' ");

$cek = mysqli_num_rows($sql);
if ($cek>0) {
	# code...

	$data = mysqli_fetch_assoc($sql);
	if ($data['role']=="admin") {
		# code...
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:../admin/index.php");
	}elseif ($data['role']=="mahasiswa") {
		# code...
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:../mahasiswa/dashboard.php");

	}else{
		echo "data not found";
	}
}else{
	header("location:../index.php");
}
?>