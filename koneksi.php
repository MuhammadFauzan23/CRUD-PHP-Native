<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_akademik"; //Nama Databases
	//Melakukan koneksi ke db
	$koneksi = mysqli_connect($host, $user, $pass, $db);
	if(!$koneksi){
		echo "Gagal konek : " . die(mysqli_error($koneksi)); 
	}