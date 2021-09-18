<?php
$host="localhost";
$username = "root";
$pass = "";
$db = "univ_db";

$conn = new mysqli($host,$username,$pass, $db);

// if ($conn->connect_error) {
// 	# code...
// 	die("koneksi gagal".$conn->connect_error);
// }else{
// 	echo "berasil";
// }
?>