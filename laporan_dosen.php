<?php

include 'fpdf/fpdf.php';
include 'koneksi.php';

$pdf = new fpdf ("L","cm","A4");
$pdf -> SetMargins(0.5,1,1);
$pdf -> AliasNbPages();
$pdf -> AddPage();
$pdf -> SetFont('Arial','B',14);
$pdf -> Cell(25.5,0.7,"DATA DOSEN");
$pdf -> ln();
$pdf -> ln();
$pdf -> SetFont('Arial','B',10);
$pdf -> Cell(1,0.8,'NO',1,0);
$pdf -> Cell(6,0.8,'NIDN',1,0);
$pdf -> Cell(7,0.8,'NAMA DOSEN',1,0);
$pdf -> Cell(7,0.8,'ALAMAT',1,0);
$pdf -> Cell(5,0.8,'JABATAN',1,1);
$pdf -> SetFont('Arial','',10);
$no = 1;
$tampil = mysqli_query($koneksi,"select * from dosen");
	while ($hasil = mysqli_fetch_array($tampil)){
		$pdf-> Cell(1,0.8,$no,1,0);
		$pdf-> Cell(6,0.8,$hasil['nidn'],1,0);
		$pdf-> Cell(7,0.8,$hasil['nama'],1,0);
		$pdf-> Cell(7,0.8,$hasil['alamat'],1,0);
		$pdf-> Cell(5,0.8,$hasil['jabatan'],1,1);
		$no++;
	}
	$pdf-> Output("laporan_dosen.pdf","I");
?>	