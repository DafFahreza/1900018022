<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbhotel";

$connect = mysqli_connect($host,$user,$pass);

if($connect){
	echo'';
}
else{
	echo'gagal koneksi';
}