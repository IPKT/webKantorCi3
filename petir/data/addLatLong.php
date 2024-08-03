<?php
	include "connection.php";
	include "validation.php";
	
	$NIP=$_POST['NIP'];
	$DaerahLatLong=$_POST['DaerahLatLong'];
	$Latitude=$_POST['Latitude'];
	$Longitude=$_POST['Longitude'];
			
		$SaveLatLong=$mysqli->query("INSERT INTO tb_latlong
		VALUES(
		NULL,
		'$DaerahLatLong',
		'$Latitude',
		'$Longitude',
		'$NIP'
		)");
		
		if($SaveLatLong)
		{
			echo "OK";
		}else
		{
			echo "GAGAL";
		}
?>