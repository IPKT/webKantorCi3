	<meta charset="UTF-8">
    <title>Stasiun Sanglah Denpasar</title>
    <link href="../../img/favicon.ico" type="icon/x-image" rel="shortcut icon" /> 

<style type="text/css">
	@media print {
    	footer {page-break-after: always;}
	}
</style>

<?php
	include "../connection.php";
	if(!isset($_SESSION)) 
		{ 
			session_start(); 
		} ;
	if(empty($_SESSION['NIP']))
	{
	echo "<script>
			alert('Anda harus login');location.href='../../index.html';
			</script>";
	}
	
	$GetIDPemohon=$_GET['id'];
	
	$listpermohonan=$mysqli->query("SELECT * FROM tb_pemohon WHERE IDPemohon='$GetIDPemohon'");
	$tampunglistpemohon=mysqli_fetch_array($listpermohonan);
		$NamaPemohon=$tampunglistpemohon['NamaPemohon'];
		$PekerjaanPemohon=$tampunglistpemohon['PekerjaanPemohon'];
		$PerBidPemohon=$tampunglistpemohon['PerBidPemohon'];
		$Alamat=$tampunglistpemohon['Alamat'];
		$KodePosPemohon=$tampunglistpemohon['KodePosPemohon'];
		$KartuIdentitas=$tampunglistpemohon['KartuIdentitas'];
		$NoKartu=$tampunglistpemohon['NoKartu'];
		$TeleponPemohon=$tampunglistpemohon['TeleponPemohon'];
		$JenisData=$tampunglistpemohon['JenisData'];
		$DiperUtkPemohon=$tampunglistpemohon['DiperUtkPemohon'];
		$TGLPemohon=$tampunglistpemohon['TGLPemohon'];
		$BLNPemohon=$tampunglistpemohon['BLNPemohon'];
		$THNPemohon=$tampunglistpemohon['THNPemohon'];
		$JAMPemohon=$tampunglistpemohon['JAMPemohon'];
		$MNTPemohon=$tampunglistpemohon['MNTPemohon'];
		$IDLatLong=$tampunglistpemohon['IDLatLong'];
			$listIDLatLong=$mysqli->query("SELECT * FROM tb_latlong WHERE IDLatLong='$IDLatLong'");
            	$tampunglistIDLatLong=mysqli_fetch_array($listIDLatLong);
            	$DaerahLatLong=$tampunglistIDLatLong['DaerahLatLong'];
				$Latitude=$tampunglistIDLatLong['Latitude'];
				$Longitude=$tampunglistIDLatLong['Longitude'];
		$NoSurat=$tampunglistpemohon['NoSurat'];
		$NoBeritaPetir=$tampunglistpemohon['NoBeritaPetir'];
		$NoKwitansi1=$tampunglistpemohon['NoKwitansi1'];
		$JumlahKWa=$tampunglistpemohon['JumlahKWa'];
		$TerbilangKWa=$tampunglistpemohon['TerbilangKWa'];
		$NoKwitansi2=$tampunglistpemohon['NoKwitansi2'];
		$JumlahKWb=$tampunglistpemohon['JumlahKWb'];
		$TerbilangKWb=$tampunglistpemohon['TerbilangKWb'];
		
	$listpermohonanberitacuaca=$mysqli->query("SELECT * FROM tb_beritacuaca WHERE IDPemohon='$GetIDPemohon'");
	$tampunglistpermohonanberitacuaca=mysqli_fetch_array($listpermohonanberitacuaca);
		$IDBeritaCuaca=$tampunglistpermohonanberitacuaca['IDBeritaCuaca'];
		$NoBeritaCuaca=$tampunglistpermohonanberitacuaca['NoBeritaCuaca'];
		$JumlahCurah=$tampunglistpermohonanberitacuaca['JumlahCurah'];
		$TmpMax=$tampunglistpermohonanberitacuaca['TmpMax'];
		$TmpMin=$tampunglistpermohonanberitacuaca['TmpMin'];
		$UdaraMax=$tampunglistpermohonanberitacuaca['UdaraMax'];
		$UdaraMin=$tampunglistpermohonanberitacuaca['UdaraMin'];
		$RHMax=$tampunglistpermohonanberitacuaca['RHMax'];
		$RHMin=$tampunglistpermohonanberitacuaca['RHMin'];
		$NIPeritacuaca=$tampunglistpermohonanberitacuaca['NIP'];
	
	include "map.php";
	include "1.Surat.php";
	include "2.BeritaPetir.php";
	include "3.Lampiran1.php";
	include "4.Lampiran2.php";
	include "5.BeritaCuaca.php";
	include "6.Kwitansi.php";
?>