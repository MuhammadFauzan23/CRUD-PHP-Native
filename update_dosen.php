<?php 
 // include database connection file include 'koneksi_dosen.php'; 
 include 'koneksi_dosen.php';
    $nidn    = $_POST['nidn']; 
    $nama    = $_POST['nama']; 
    $alamat  = $_POST['alamat']; 
    $jabatan = $_POST['jabatan']; 
    $result  = mysqli_query($koneksi_dosen, "UPDATE dosen SET nama='$nama',alamat='$alamat',jabatan='$jabatan' WHERE nidn='$nidn'"); 
     // Redirect to homepage to display updated user in list    header("Location: index_dosen.php"); 
    header("Location: index_dosen.php");
?> 