<?php
// include database connection file
include 'koneksi_jadwal.php';
	$hari = $_POST['hari'];
	$jam = $_POST['jam'];
	$matakuliah = $_POST['matakuliah'];
	$nama_dosen = $_POST['nama_dosen'];
	$result = mysqli_query($koneksi_jadwal, "UPDATE jadwal SET hari='$hari',jam='$jam', matakuliah='$matakuliah', nama_dosen='$nama_dosen' WHERE matakuliah='$matakuliah'");
 // Redirect to homepage to display updated user in list
 header("Location: index_jadwal.php");
?>