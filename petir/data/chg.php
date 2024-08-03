<?php
	include "connection.php";
	include "validation.php";
	
	$NIP=$_POST['NIP'];
	$passbaru=$_POST['passbaru'];

		$SimpanPass=$mysqli->query("UPDATE tb_pengguna SET
		KataSandi='$passbaru'
		WHERE NIP='$NIP'
		");
		
		if($SimpanPass)
		{
			echo "OK";
		}else
		{
			echo "GAGAL";
		}
?>