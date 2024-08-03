<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    };
	include "connection.php";
	
	$usr=$_POST['user'];
	$pw=$_POST['password'];
	
	$Masuk=$mysqli->query("SELECT * FROM tb_pengguna WHERE User='$usr' && KataSandi='$pw'");
	$data=mysqli_fetch_array($Masuk);
		$_SESSION['NIP']=$data{'NIP'};
		$_SESSION['Nama']=$data{'Nama'};
		$_SESSION['Statuspengguna']=$data{'Statuspengguna'};
		$dbUsr=$data{'User'};
		$dbPw=$data['KataSandi'];
	
	if($usr==$dbUsr && $pw==$dbPw)
	{
		echo "OK";
	}else
	{
		echo "GAGAL";
	}
?>