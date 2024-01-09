<?php 
include 'koneksi_pegawai.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$bagian= $_POST['bagian'];
$input = mysqli_query($koneksi_pegawai,"INSERT INTO pegawai 
	VALUES('$nik','$nama','$bagian')") or die(mysql_error());
	if($input){
		echo "Data Berhasil Disimpan";
		header("location:index_pegawai.php");
	}else{
		echo "Gagal Disimpan";
	}
?>