<?php
// include database connection file
include 'koneksi_pegawai.php';
	 $nik= $_POST['nik'];
	 $nama=$_POST['nama'];
	 $bagian=$_POST['bagian'];
$result = mysqli_query($koneksi_pegawai, "UPDATE pegawai SET 
nama='$nama',bagian='$bagian' WHERE nik='$nik'");
 // Redirect to homepage to display updated user in list
 header("Location: index_pegawai.php");
?>