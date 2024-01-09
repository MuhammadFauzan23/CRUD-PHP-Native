<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_akademik"; //Nama Databases
	//Melakukan koneksi ke db
	$koneksi_pegawai = mysqli_connect($host, $user, $pass, $db);
		if(!$koneksi_pegawai){
			echo "Gagal konek : " . die(mysqli_error($koneksi_pegawai)); 
	}