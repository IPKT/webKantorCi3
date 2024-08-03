<?php
	include "connection.php";
	include "validation.php";
	
	$addNIP=$_POST['addNIP'];
	$addNama=$_POST['addNama'];
	$addUsr=$_POST['addUsr'];
	$addPwd=$_POST['addPwd'];
	$StatusPengguna=$_POST['StatusPengguna'];
		
		$SimpanUser=$mysqli->query("INSERT INTO tb_Pengguna
		VALUES(
		'$addNIP',
		'$addUsr',
		'$addNama',
		'$addPwd',
		'$StatusPengguna'
		)");
		
		if($SimpanUser)
		{
			echo "OK";
		}else
		{
			echo "GAGAL";
		}
?>