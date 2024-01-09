<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_akademik"; //Nama Databases
	//Melakukan koneksi ke db
	$koneksi_dosen = mysqli_connect($host, $user, $pass, $db);
	if(!$koneksi_dosen){
		echo "Gagal konek : " . die(mysqli_error($koneksi_dosen)); 
	}