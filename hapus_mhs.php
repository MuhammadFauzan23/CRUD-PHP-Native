<?php 
 // include database connection file
include 'koneksi.php';
// Get id from URL to delete that user
$nim = $_GET['nim'];
// Delete user row from table based on gived id
$result = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'"); 
// After delete redirect to home, so that latest user list will be displayed.
header("Location:index.php");  
?> 