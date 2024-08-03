<?php
	include "../connection.php";
	include "../validation.php";
	
	$NIP=$_POST['NIP'];
	$IDPemohon=$_POST['IDPemohon'];
	$NoSurat=$_POST['NoSurat'];
	$NoBeritaPetir=$_POST['NoBeritaPetir'];
	$NoKwitansi1=$_POST['NoKwitansi1'];
	$JumlahKWa=$_POST['JumlahKWa'];
	$TerbilangKWa=$_POST['TerbilangKWa'];
	$NoKwitansi2=$_POST['NoKwitansi2'];
	$JumlahKWb=$_POST['JumlahKWb'];
	$TerbilangKWb=$_POST['TerbilangKWb'];
	
	$NoBeritaCuaca=$_POST['NoBeritaCuaca'];
	$JumlahCurah=$_POST['JumlahCurah'];
	$TmpMax=$_POST['TmpMax'];
	$TmpMin=$_POST['TmpMin'];
	$UdaraMax=$_POST['UdaraMax'];
	$UdaraMin=$_POST['UdaraMin'];
	$RHMax=$_POST['RHMax'];
	$RHMin=$_POST['RHMin'];
	
	if(empty($NoSurat) || empty($NoBeritaPetir) || empty($NoKwitansi1) || empty($JumlahKWa) || empty($TerbilangKWa) || empty($NoKwitansi2) || empty($JumlahKWb) || empty($TerbilangKWb) || empty($NoBeritaCuaca) || empty($JumlahCurah) || empty($TmpMax) || empty($TmpMin) || empty($UdaraMax) || empty($UdaraMin) || empty($RHMax) || empty($RHMin))
	{
		echo "<script>
		alert('Semua data harus terisi');close();
		</script>";
	}
	else
	{
		$SaveNoSurat=$mysqli->query("UPDATE tb_pemohon SET 
		NIP='$NIP',
		NoSurat='$NoSurat',
		NoBeritaPetir='$NoBeritaPetir',
		NoKwitansi1='$NoKwitansi1',
		JumlahKWa='$JumlahKWa',
		TerbilangKWa='$TerbilangKWa',
		NoKwitansi2='$NoKwitansi2',
		JumlahKWb='$JumlahKWb',
		TerbilangKWb='$TerbilangKWb'
		WHERE IDPemohon='$IDPemohon'
		");
		
		$BeritaCuaca=$mysqli->query("INSERT INTO tb_beritacuaca
		VALUES(
		NULL,
		'$NoBeritaCuaca',
		'$JumlahCurah',
		'$TmpMax',
		'$TmpMin',
		'$UdaraMax',
		'$UdaraMin',
		'$RHMax',
		'$RHMin',
		'$IDPemohon',
		'$NIP'
		)");
		
		if($SaveNoSurat && $BeritaCuaca)
		{
			echo "<script>
			location.href='detaildata.php?id=$IDPemohon';
			</script>";
		}else
		{
			echo "<script>
			location.href='../../page.php';
			</script>";
		}
	}
?>