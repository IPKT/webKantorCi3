<?php
	include "connection.php";
	include "validation.php";
	
	$ID=$_GET['ID'];
	
		$DelWishlist=$mysqli->query("DELETE FROM tb_pemohon WHERE IDPemohon='$ID'");
		
		if($DelWishlist)
		{
			echo "OK";
		}else
		{
			echo "GAGAL";
		}
?>