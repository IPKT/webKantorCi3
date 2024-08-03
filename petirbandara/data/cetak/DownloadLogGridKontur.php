<?php
	error_reporting(0);
	$TGLGrid		= $_POST['TGLGrid'];
	$BLNGrid		= $_POST['BLNGrid'];
	$THNGrid		= $_POST['THNGrid'];
	$Grid			= $_POST['Grid'];
	$LatMin			= $_POST['LatMin'];
	$LatMax			= $_POST['LatMax'];
	$LongMin		= $_POST['LongMin'];
	$LongMax		= $_POST['LongMax'];
	$DotPlusLat		= ($LatMin-($LatMax)) / $Grid;
	$DotPlusLong	= ($LongMax-$LongMin) / $Grid;
	echo "No\r\tLatitude\r\tLongitude\r\tSambaran\r\n";

	if(!empty($TGLGrid))
	{
		$Date	= $THNGrid."".$BLNGrid."".$TGLGrid;
		header("Content-type: text/html");
		header("Content-Disposition: attachment; filename=NGXDS_".$Date.".txt");
		header("Pragma: no-cache");
		header("Expires: 0");
		include "selectionKonturHarian.php";
		
		$no = 1;
		for($y=0; $y<$Grid; $y++)
		{
			for($z=0; $z<$Grid; $z++)
			{
				$LatCenter	= number_format($LatMin-(($DotPlusLat*($y+($y+1))/2)), 5);
				$LongCenter	= number_format($LongMin+(($DotPlusLong*($z+($z+1))/2)), 5);
				echo $no."\r\t".$LatCenter."\r\t".$LongCenter."\r\t".$ValueBox[$y][$z]."\r\n";
				$no++;
			}
		}
	}
	else if(empty($TGLGrid))
	{
		$Date	= $THNGrid."".$BLNGrid;
		header("Content-type: text/html");
		header("Content-Disposition: attachment; filename=NGXDS_".$Date.".txt");
		header("Pragma: no-cache");
		header("Expires: 0");
		include "selectionKonturBulanan.php";
		
		$no = 1;
		for($y=0; $y<$Grid; $y++)
		{
			for($z=0; $z<$Grid; $z++)
			{
				$LatCenter	= number_format($LatMin-(($DotPlusLat*($y+($y+1))/2)), 5);
				$LongCenter	= number_format($LongMin+(($DotPlusLong*($z+($z+1))/2)), 5);
				echo $no."\r\t".$LatCenter."\r\t".$LongCenter."\r\t".$ValueBox[$y][$z]."\r\n";
				$no++;
			}
		}
	}
?>