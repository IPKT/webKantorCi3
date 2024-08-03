<?php
	include "connection.php";
	include "validation.php";
	
	$TGLPermohonan=$_POST['TGLPermohonan'];
	$BLNPermohonan=$_POST['BLNPermohonan'];
	$THNPermohonan=$_POST['THNPermohonan'];
	$NamaPemohon=$_POST['NamaPemohon'];
	$PekerjaanPemohon=$_POST['PekerjaanPemohon'];
	$PerBidPemohon=$_POST['PerBidPemohon'];
	$Alamat=$_POST['Alamat'];
	$KodePosPemohon=$_POST['KodePosPemohon'];
	$KartuIdentitas=$_POST['KartuIdentitas'];
	$NoKartu=$_POST['NoKartu'];
	$TeleponPemohon=$_POST['TeleponPemohon'];
	$JenisData=$_POST['JenisData'];
	$DiperUtkPemohon=$_POST['DiperUtkPemohon'];
	$TGLPemohon=$_POST['TGLPemohon'];
	$BLNPemohon=$_POST['BLNPemohon'];
	$THNPemohon=$_POST['THNPemohon'];
	$JAMPemohon=$_POST['JAMPemohon'];
	$MNTPemohon=$_POST['MNTPemohon'];
	$IDLatLong=$_POST['IDLatLong'];
	$NIP=$_POST['NIP'];
	
		$SaveWishlist=$mysqli->query("INSERT INTO tb_pemohon
		VALUES(
		NULL,
		'$TGLPermohonan',
		'$BLNPermohonan',
		'$THNPermohonan',
		'$NamaPemohon',
		'$PekerjaanPemohon',
		'$PerBidPemohon',
		'$Alamat',
		'$KodePosPemohon',
		'$KartuIdentitas',
		'$NoKartu',
		'$TeleponPemohon',
		'$JenisData',
		'$DiperUtkPemohon',
		'$TGLPemohon',
		'$BLNPemohon',
		'$THNPemohon',
		'$JAMPemohon',
		'$MNTPemohon',
		'$IDLatLong',
		'$NIP',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		''
		)");
		
		if($SaveWishlist)
		{
			echo "OK";
		}else
		{
			echo "GAGAL";
		}
?>