<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kamar = $_POST['kamar'];
$harga = $_POST['harga'];

$connect = mysqli_connect("insert into kamar values('','$nama','$kamar','$harga')");
if($connect){
	echo 'data berhasil';
}else{
	echo 'yaaah';
}
?>