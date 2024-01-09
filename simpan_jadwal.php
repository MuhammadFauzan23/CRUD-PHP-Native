<?php 
include 'koneksi_jadwal.php';
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$matakuliah= $_POST['matakuliah'];
$nama_dosen= $_POST['nama_dosen'];
$input = mysqli_query($koneksi_jadwal,"INSERT INTO jadwal VALUES('$hari','$jam','$matakuliah','$nama_dosen')") or die(mysql_error());
	if($input){
		echo "Data Berhasil Disimpan";
			header("location:index_jadwal.php");
	}else{
		echo "Gagal Disimpan";
	}
?>