<?php
$Nama=$Kelas=$NIM=$Password=$Hobi=$Jk=$Agama=$Komen=$Nama_err=$Kelas_err=$NIM_err=$Password_err=$Hobi_err=$Jk_err=$Agama_err=$Komen_err="";
if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (empty(trim($_POST['Nama']))) {
			echo $Nama_err="Masukkan Nama Anda!<br>";
			
		}
		else {
			echo "Nama :".$Nama=$_POST['Nama']."<br>";
		}
		if (empty(trim($_POST['Kelas']))) {
			echo $Kelas_err="Masukkan Kelas <br>";
		}
		else{
			echo "Kelas :".$Kelas=$_POST['Kelas']."<br>";
		}
		if (empty(trim($_POST['NIM']))) {
			echo $NIM_err="Masukkan NIM<br>";
		}
		else{
			echo "NIM :".$NIM=$_POST['NIM']."<br>";
		}
		if(empty(trim($_POST['Password']))){
			echo $Password_err="Masukkan Password"."<br>";
		}
		else{
			echo "Password :".$Password=$_POST['Password']."<br>";
		}
		if (empty(trim($_POST['Hobi']))) {
			 echo $Hobi_err="Masukkan Hobi"."<br>";
		}
		else{
			echo "Hobi :".$Hobi=$_POST['Hobi']."<br>";
		}
		if (empty(trim($_POST['JK']))) {
			 echo $JK_err="Masukkan Jenisa Kelamin"."<br>";
		}
		else{
			echo "Jenis Kelamin :".$JK=$_POST['JK']."<br>";
		}
		if (empty(trim($_POST['Agama']))) {
			 echo $Agama_err="Masukkan Agama"."<br>";
		}
		else{
			echo "Agama :".$Jk=$_POST['Agama']."<br>";
		}
		
	}
?> 