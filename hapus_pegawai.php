<?php
// include database connection file
include 'koneksi_pegawai.php';
$nik = $_GET['nik'];
$result = mysqli_query($koneksi_pegawai, "DELETE FROM pegawai WHERE nik='$nik'");
header("Location:index_pegawai.php");
?>