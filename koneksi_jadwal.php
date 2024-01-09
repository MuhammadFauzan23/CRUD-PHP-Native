<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_akademik"; //Nama Databases
	//Melakukan koneksi ke db
	$koneksi_jadwal = mysqli_connect($host, $user, $pass, $db);
		if(!$koneksi_jadwal){
			echo "Gagal konek : " . die(mysqli_error($koneksi_jadwal)); 
	}
?>	