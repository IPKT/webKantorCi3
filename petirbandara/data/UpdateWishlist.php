<?php
	include "connection.php";
	include "validation.php";
	
	$NIP=$_POST['NIP'];
	$IDPemohon=$_POST['IDPemohon'];
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
	
	$NoSurat=$_POST['NoSurat'];
	$NoBeritaPetir=$_POST['NoBeritaPetir'];
	$NoKwitansi1=$_POST['NoKwitansi1'];
	$JumlahKWa=$_POST['JumlahKWa'];
	$TerbilangKWa=$_POST['TerbilangKWa'];
	$NoKwitansi2=$_POST['NoKwitansi2'];
	$JumlahKWb=$_POST['JumlahKWb'];
	$TerbilangKWb=$_POST['TerbilangKWb'];
	
		$UpdateWishlist=$mysqli->query("UPDATE tb_pemohon SET
		NamaPemohon='$NamaPemohon',
		PekerjaanPemohon='$PekerjaanPemohon',
		PerBidPemohon='$PerBidPemohon',
		Alamat='$Alamat',
		KodePosPemohon='$KodePosPemohon',
		KartuIdentitas='$KartuIdentitas',
		NoKartu='$NoKartu',
		TeleponPemohon='$TeleponPemohon',
		JenisData='$JenisData',
		DiperUtkPemohon='$DiperUtkPemohon',
		TGLPemohon='$TGLPemohon',
		BLNPemohon='$BLNPemohon',
		THNPemohon='$THNPemohon',
		JAMPemohon='$JAMPemohon',
		MNTPemohon='$MNTPemohon',
		IDLatLong='$IDLatLong',
		NIP='$NIP',
		NoSurat='$NoSurat',
		NoBeritaPetir='$NoBeritaPetir',
		NoKwitansi1='$NoKwitansi1',
		JumlahKWa='$JumlahKWa',
		TerbilangKWa='$TerbilangKWa',
		NoKwitansi2='$NoKwitansi2',
		JumlahKWb='$JumlahKWb',
		TerbilangKWb='$TerbilangKWb'
		WHERE IDPemohon='$IDPemohon'");
		
		if($UpdateWishlist)
		{
			echo "OK";
		}else
		{
			echo "GAGAL";
		}
?>