<?php 
 // include database connection file
include 'koneksi_dosen.php';
// Get id from URL to delete that user
$nidn = $_GET['nidn'];
// Delete user row from table based on gived id
$result = mysqli_query($koneksi_dosen, "DELETE FROM dosen WHERE nidn='$nidn'"); 
// After delete redirect to home, so that latest user list will be displayed.
header("Location:index_dosen.php");  
?> 