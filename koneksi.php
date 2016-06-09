<?php
$host= "localhost";
$user= "root";
$pass = "";
$dbnm = "mahasiswa";

$conn = mysql_connect ($host, $user, $pass);
if($conn){
	$buka=mysql_select_db($dbnm);
	if(!$buka){
		echo "Database tidak dapat dibuka";
	}
}else {
	echo "Database tidak terkoneksi";
}
?>