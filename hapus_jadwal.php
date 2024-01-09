<?php
// include database connection file
include 'koneksi_jadwal.php';
$matakuliah = $_GET['matakuliah'];
$result = mysqli_query($koneksi_jadwal, "DELETE FROM jadwal WHERE matakuliah='$matakuliah'");
header("Location:index_jadwal.php");
?>