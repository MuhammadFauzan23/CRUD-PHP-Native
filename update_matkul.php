<?php
// include database connection file
include 'koneksi_matkul.php';
	 $hari= $_POST['hari'];
	 $jam=$_POST['jam'];
	 $mata_kuliah=$_POST['mata_kuliah'];
	 $nama_dosen=$_POST['nama_dosen'];
$result = mysqli_query($koneksi_matkul, "UPDATE jadwal SET 
hari='$hari',jam='$jam', mata_kuliah='$mata_kuliah', nama_dosen='nama_dosen' WHERE mata_kuliah='$mata_kuliah'");
 // Redirect to homepage to display updated user in list
 header("Location: index_matkul.php");
?>