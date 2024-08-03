<?php
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
	include "../connection.php";
	include "../validation.php";

	$KolomGrid		= $_POST['Grid'];
	$BarisGrid		= $_POST['Grid'];
	$LatMin			= $_POST['LatMin'];
	$LatMax			= $_POST['LatMax'];
	$LongMin		= $_POST['LongMin'];
	$LongMax		= $_POST['LongMax'];
	$DotPlusLat		= ($LatMin-($LatMax)) / $BarisGrid;
	$DotPlusLong	= ($LongMax-$LongMin) / $KolomGrid;
	$no = 0;
?>

<!------------------------------TANGGAL 01------------------------------>
<?php
class MyDB01 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."01";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike01 = 0;
   $StrongStrike01 = 0;
   $CGPlus01 = 0;
   $CGMin01 = 0;
   $IC01 = 0;
   
   	$db01 = new MyDB01();
   $sql01 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret01 = $db01->query($sql01);
if(empty($ret01))
{
	?><script type="text/javascript">var locationsTGL01 = [0,0,0,0,3];</script><?php
	$db01->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL01 = [
			<?php
			   while($row01 = $ret01->fetchArray(SQLITE3_ASSOC) )
			   {
				   $Delta01=(sqrt((($row01['latitude']-(-8.67694))*($row01['latitude']-(-8.67694)))+(($row01['longitude']-112.21)*($row01['longitude']-112.21))))*111;

					$Strike01++;

					if($Delta01<=25)
					{
						$StrongStrike01++;
					}

					if($row01['type']=="0")
					{
						$CGPlus01++;
					}
					elseif($row01['type']==1)
					{
						$CGMin01++;
					}
					elseif($row01['type']==2)
					{
						$IC01++;
					}
				    
				   	$DBJAMpetir1 = $row01['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row01['id'];?>, <?php echo $row01['latitude'];?>, <?php echo $row01['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row01['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db01->close();
}
?>

<!------------------------------TANGGAL 02------------------------------>
<?php
class MyDB02 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."02";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike02 = 0;
   $StrongStrike02 = 0;
   $CGPlus02 = 0;
   $CGMin02 = 0;
   $IC02 = 0;
   
   	$db02 = new MyDB02();
   $sql02 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret02 = $db02->query($sql02);
if(empty($ret02))
{
	?><script type="text/javascript">var locationsTGL02 = [0,0,0,0,3];</script><?php
	$db02->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL02 = [
			<?php
   while($row02 = $ret02->fetchArray(SQLITE3_ASSOC) )
   {
	   $Delta02=(sqrt((($row02['latitude']-(-8.67694))*($row02['latitude']-(-8.67694)))+(($row02['longitude']-112.21)*($row02['longitude']-112.21))))*111;
	   
		$Strike02++;
		
		if($Delta02<=25)
		{
			$StrongStrike02++;
		}
		
		if($row02['type']=="0")
		{
			$CGPlus02++;
		}
		elseif($row02['type']==1)
		{
			$CGMin02++;
		}
		elseif($row02['type']==2)
		{
			$IC02++;
		}
	   
	   				$DBJAMpetir1 = $row02['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran2 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row02['id'];?>, <?php echo $row02['latitude'];?>, <?php echo $row02['longitude'];?>, '<?php echo $JAMsambaran2;?>', <?php echo $row02['type'];?>],
					<?php
   }
			?>
		];
	</script>
	<?php
   $db02->close();
}
?>

<!------------------------------TANGGAL 03------------------------------>
<?php
class MyDB03 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."03";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike03 = 0;
   $StrongStrike03 = 0;
   $CGPlus03 = 0;
   $CGMin03 = 0;
   $IC03 = 0;
   
   	$db03 = new MyDB03();
   $sql03 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret03 = $db03->query($sql03);
if(empty($ret03))
{
	?><script type="text/javascript">var locationsTGL03 = [0,0,0,0,3];</script><?php
	$db03->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL03 = [
			<?php
   while($row03 = $ret03->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta03=(sqrt((($row03['latitude']-(-8.67694))*($row03['latitude']-(-8.67694)))+(($row03['longitude']-112.21)*($row03['longitude']-112.21))))*111;
	   
		$Strike03++;
		
		if($Delta03<=25)
		{
			$StrongStrike03++;
		}
		
		if($row03['type']=="0")
		{
			$CGPlus03++;
		}
		elseif($row03['type']==1)
		{
			$CGMin03++;
		}
		elseif($row03['type']==2)
		{
			$IC03++;
		}
	   
	    $DBJAMpetir1 = $row03['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row03['id'];?>, <?php echo $row03['latitude'];?>, <?php echo $row03['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row03['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db03->close();
}
?>

<!------------------------------TANGGAL 04------------------------------>
<?php
class MyDB04 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."04";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike04 = 0;
   $StrongStrike04 = 0;
   $CGPlus04 = 0;
   $CGMin04 = 0;
   $IC04 = 0;
   
   	$db04 = new MyDB04();
   $sql04 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret04 = $db04->query($sql04);
if(empty($ret04))
{
	?><script type="text/javascript">var locationsTGL04 = [0,0,0,0,3];</script><?php
	$db04->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL04 = [
			<?php
   while($row04 = $ret04->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta04=(sqrt((($row04['latitude']-(-8.67694))*($row04['latitude']-(-8.67694)))+(($row04['longitude']-112.21)*($row04['longitude']-112.21))))*111;
	   
		$Strike04++;
		
		if($Delta04<=25)
		{
			$StrongStrike04++;
		}
		
		if($row04['type']=="0")
		{
			$CGPlus04++;
		}
		elseif($row04['type']==1)
		{
			$CGMin04++;
		}
		elseif($row04['type']==2)
		{
			$IC04++;
		}
	    
	    $DBJAMpetir1 = $row04['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row04['id'];?>, <?php echo $row04['latitude'];?>, <?php echo $row04['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row04['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db04->close();
}
?>

<!------------------------------TANGGAL 05------------------------------>
<?php
class MyDB05 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."05";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike05 = 0;
   $StrongStrike05 = 0;
   $CGPlus05 = 0;
   $CGMin05 = 0;
   $IC05 = 0;
   
   	$db05 = new MyDB05();
   $sql05 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret05 = $db05->query($sql05);
if(empty($ret05))
{
	?><script type="text/javascript">var locationsTGL05 = [0,0,0,0,3];</script><?php
	$db05->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL05 = [
			<?php
   while($row05 = $ret05->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta05=(sqrt((($row05['latitude']-(-8.67694))*($row05['latitude']-(-8.67694)))+(($row05['longitude']-112.21)*($row05['longitude']-112.21))))*111;
	   
		$Strike05++;
		
		if($Delta05<=25)
		{
			$StrongStrike05++;
		}
		
		if($row05['type']=="0")
		{
			$CGPlus05++;
		}
		elseif($row05['type']==1)
		{
			$CGMin05++;
		}
		elseif($row05['type']==2)
		{
			$IC05++;
		}
	   
	   $DBJAMpetir1 = $row05['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row05['id'];?>, <?php echo $row05['latitude'];?>, <?php echo $row05['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row05['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db05->close();
}
?>

<!------------------------------TANGGAL 06------------------------------>
<?php
class MyDB06 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."06";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike06 = 0;
   $StrongStrike06 = 0;
   $CGPlus06 = 0;
   $CGMin06 = 0;
   $IC06 = 0;
   
   	$db06 = new MyDB06();
   $sql06 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret06 = $db06->query($sql06);
if(empty($ret06))
{
	?><script type="text/javascript">var locationsTGL06 = [0,0,0,0,3];</script><?php
	$db06->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL06 = [
			<?php
   while($row06 = $ret06->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta06=(sqrt((($row06['latitude']-(-8.67694))*($row06['latitude']-(-8.67694)))+(($row06['longitude']-112.21)*($row06['longitude']-112.21))))*111;
	   
		$Strike06++;
		
		if($Delta06<=25)
		{
			$StrongStrike06++;
		}
		
		if($row06['type']=="0")
		{
			$CGPlus06++;
		}
		elseif($row06['type']==1)
		{
			$CGMin06++;
		}
		elseif($row06['type']==2)
		{
			$IC06++;
		}
	   
	   $DBJAMpetir1 = $row06['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row06['id'];?>, <?php echo $row06['latitude'];?>, <?php echo $row06['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row06['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db06->close();
}
?>

<!------------------------------TANGGAL 07------------------------------>
<?php
class MyDB07 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."07";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike07 = 0;
   $StrongStrike07 = 0;
   $CGPlus07 = 0;
   $CGMin07 = 0;
   $IC07 = 0;
   
   	$db07 = new MyDB07();
   $sql07 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret07 = $db07->query($sql07);
if(empty($ret07))
{
	?><script type="text/javascript">var locationsTGL07 = [0,0,0,0,3];</script><?php
	$db07->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL07 = [
			<?php
   while($row07 = $ret07->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta07=(sqrt((($row07['latitude']-(-8.67694))*($row07['latitude']-(-8.67694)))+(($row07['longitude']-112.21)*($row07['longitude']-112.21))))*111;
	   
		$Strike07++;
		
		if($Delta07<=25)
		{
			$StrongStrike07++;
		}
		
		if($row07['type']=="0")
		{
			$CGPlus07++;
		}
		elseif($row07['type']==1)
		{
			$CGMin07++;
		}
		elseif($row07['type']==2)
		{
			$IC07++;
		}
	   
	   $DBJAMpetir1 = $row07['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row07['id'];?>, <?php echo $row07['latitude'];?>, <?php echo $row07['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row07['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db07->close();
}
?>

<!------------------------------TANGGAL 08------------------------------>
<?php
class MyDB08 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."08";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike08 = 0;
   $StrongStrike08 = 0;
   $CGPlus08 = 0;
   $CGMin08 = 0;
   $IC08 = 0;
   
   	$db08 = new MyDB08();
   $sql08 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret08 = $db08->query($sql08);
if(empty($ret08))
{
	?><script type="text/javascript">var locationsTGL08 = [0,0,0,0,3];</script><?php
	$db08->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL08 = [
			<?php
   while($row08 = $ret08->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta08=(sqrt((($row08['latitude']-(-8.67694))*($row08['latitude']-(-8.67694)))+(($row08['longitude']-112.21)*($row08['longitude']-112.21))))*111;
	   
		$Strike08++;
		
		if($Delta08<=25)
		{
			$StrongStrike08++;
		}
		
		if($row08['type']=="0")
		{
			$CGPlus08++;
		}
		elseif($row08['type']==1)
		{
			$CGMin08++;
		}
		elseif($row08['type']==2)
		{
			$IC08++;
		}
	   
	   $DBJAMpetir1 = $row08['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row08['id'];?>, <?php echo $row08['latitude'];?>, <?php echo $row08['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row08['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db08->close();
}
?>

<!------------------------------TANGGAL 09------------------------------>
<?php
class MyDB09 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."09";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike09 = 0;
   $StrongStrike09 = 0;
   $CGPlus09 = 0;
   $CGMin09 = 0;
   $IC09 = 0;
   
   	$db09 = new MyDB09();
   $sql09 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret09 = $db09->query($sql09);
if(empty($ret09))
{
	?><script type="text/javascript">var locationsTGL09 = [0,0,0,0,3];</script><?php
	$db09->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL09 = [
			<?php
   while($row09 = $ret09->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta09=(sqrt((($row09['latitude']-(-8.67694))*($row09['latitude']-(-8.67694)))+(($row09['longitude']-112.21)*($row09['longitude']-112.21))))*111;
	   
		$Strike09++;
		
		if($Delta09<=25)
		{
			$StrongStrike09++;
		}
		
		if($row09['type']=="0")
		{
			$CGPlus09++;
		}
		elseif($row09['type']==1)
		{
			$CGMin09++;
		}
		elseif($row09['type']==2)
		{
			$IC09++;
		}
	   
	   $DBJAMpetir1 = $row09['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row09['id'];?>, <?php echo $row09['latitude'];?>, <?php echo $row09['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row09['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db09->close();
}
?>

<!------------------------------TANGGAL 10------------------------------>
<?php
class MyDB10 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."10";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike10 = 0;
   $StrongStrike10 = 0;
   $CGPlus10 = 0;
   $CGMin10 = 0;
   $IC10 = 0;
   
   	$db10 = new MyDB10();
   $sql10 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret10 = $db10->query($sql10);
if(empty($ret10))
{
	?><script type="text/javascript">var locationsTGL10 = [0,0,0,0,3];</script><?php
	$db10->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL10 = [
			<?php
   while($row10 = $ret10->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta10=(sqrt((($row10['latitude']-(-8.67694))*($row10['latitude']-(-8.67694)))+(($row10['longitude']-112.21)*($row10['longitude']-112.21))))*111;
	   
		$Strike10++;
		
		if($Delta10<=25)
		{
			$StrongStrike10++;
		}
		
		if($row10['type']=="0")
		{
			$CGPlus10++;
		}
		elseif($row10['type']==1)
		{
			$CGMin10++;
		}
		elseif($row10['type']==2)
		{
			$IC10++;
		}
	   
	   $DBJAMpetir1 = $row10['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row10['id'];?>, <?php echo $row10['latitude'];?>, <?php echo $row10['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row10['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db10->close();
}
?>

<!------------------------------TANGGAL 11------------------------------>
<?php
class MyDB11 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."11";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike11 = 0;
   $StrongStrike11 = 0;
   $CGPlus11 = 0;
   $CGMin11 = 0;
   $IC11 = 0;
   
   	$db11 = new MyDB11();
   $sql11 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret11 = $db11->query($sql11);
if(empty($ret11))
{
	?><script type="text/javascript">var locationsTGL11 = [0,0,0,0,3];</script><?php
	$db11->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL11 = [
			<?php
   while($row11 = $ret11->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta11=(sqrt((($row11['latitude']-(-8.67694))*($row11['latitude']-(-8.67694)))+(($row11['longitude']-112.21)*($row11['longitude']-112.21))))*111;
	   
		$Strike11++;
		
		if($Delta11<=25)
		{
			$StrongStrike11++;
		}
		
		if($row11['type']=="0")
		{
			$CGPlus11++;
		}
		elseif($row11['type']==1)
		{
			$CGMin11++;
		}
		elseif($row11['type']==2)
		{
			$IC11++;
		}
	   
	   $DBJAMpetir1 = $row11['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row11['id'];?>, <?php echo $row11['latitude'];?>, <?php echo $row11['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row11['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db11->close();
}
?>

<!------------------------------TANGGAL 12------------------------------>
<?php
class MyDB12 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."12";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike12 = 0;
   $StrongStrike12 = 0;
   $CGPlus12 = 0;
   $CGMin12 = 0;
   $IC12 = 0;
   
   	$db12 = new MyDB12();
   $sql12 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret12 = $db12->query($sql12);
if(empty($ret12))
{
	?><script type="text/javascript">var locationsTGL12 = [0,0,0,0,3];</script><?php
	$db12->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL12 = [
			<?php
   while($row12 = $ret12->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta12=(sqrt((($row12['latitude']-(-8.67694))*($row12['latitude']-(-8.67694)))+(($row12['longitude']-112.21)*($row12['longitude']-112.21))))*111;
	   
		$Strike12++;
		
		if($Delta12<=25)
		{
			$StrongStrike12++;
		}
		
		if($row12['type']=="0")
		{
			$CGPlus12++;
		}
		elseif($row12['type']==1)
		{
			$CGMin12++;
		}
		elseif($row12['type']==2)
		{
			$IC12++;
		}
	   
	   $DBJAMpetir1 = $row12['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row12['id'];?>, <?php echo $row12['latitude'];?>, <?php echo $row12['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row12['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db12->close();
}
?>

<!------------------------------TANGGAL 13------------------------------>
<?php
class MyDB13 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."13";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike13 = 0;
   $StrongStrike13 = 0;
   $CGPlus13 = 0;
   $CGMin13 = 0;
   $IC13 = 0;
   
   	$db13 = new MyDB13();
   $sql13 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret13 = $db13->query($sql13);
if(empty($ret13))
{
	?><script type="text/javascript">var locationsTGL13 = [0,0,0,0,3];</script><?php
	$db13->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL13 = [
			<?php
   while($row13 = $ret13->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta13=(sqrt((($row13['latitude']-(-8.67694))*($row13['latitude']-(-8.67694)))+(($row13['longitude']-112.21)*($row13['longitude']-112.21))))*111;
	   
		$Strike13++;
		
		if($Delta13<=25)
		{
			$StrongStrike13++;
		}
		
		if($row13['type']=="0")
		{
			$CGPlus13++;
		}
		elseif($row13['type']==1)
		{
			$CGMin13++;
		}
		elseif($row13['type']==2)
		{
			$IC13++;
		}
	   
	   $DBJAMpetir1 = $row13['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row13['id'];?>, <?php echo $row13['latitude'];?>, <?php echo $row13['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row13['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db13->close();
}
?>

<!------------------------------TANGGAL 14------------------------------>
<?php
class MyDB14 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."14";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike14 = 0;
   $StrongStrike14 = 0;
   $CGPlus14 = 0;
   $CGMin14 = 0;
   $IC14 = 0;
   
   	$db14 = new MyDB14();
   $sql14 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret14 = $db14->query($sql14);
if(empty($ret14))
{
	?><script type="text/javascript">var locationsTGL14 = [0,0,0,0,3];</script><?php
	$db14->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL14 = [
			<?php
   while($row14 = $ret14->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta14=(sqrt((($row14['latitude']-(-8.67694))*($row14['latitude']-(-8.67694)))+(($row14['longitude']-112.21)*($row14['longitude']-112.21))))*111;
	   
		$Strike14++;
		
		if($Delta14<=25)
		{
			$StrongStrike14++;
		}
		
		if($row14['type']=="0")
		{
			$CGPlus14++;
		}
		elseif($row14['type']==1)
		{
			$CGMin14++;
		}
		elseif($row14['type']==2)
		{
			$IC14++;
		}
	   
	   $DBJAMpetir1 = $row14['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row14['id'];?>, <?php echo $row14['latitude'];?>, <?php echo $row14['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row14['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db14->close();
}
?>

<!------------------------------TANGGAL 15------------------------------>
<?php
class MyDB15 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."15";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike15 = 0;
   $StrongStrike15 = 0;
   $CGPlus15 = 0;
   $CGMin15 = 0;
   $IC15 = 0;
   
   	$db15 = new MyDB15();
   $sql15 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret15 = $db15->query($sql15);
   if(empty($ret15))
{
	?><script type="text/javascript">var locationsTGL15 = [0,0,0,0,3];</script><?php
	$db15->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL15 = [
			<?php
   while($row15 = $ret15->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta15=(sqrt((($row15['latitude']-(-8.67694))*($row15['latitude']-(-8.67694)))+(($row15['longitude']-112.21)*($row15['longitude']-112.21))))*111;
	   
		$Strike15++;
		
		if($Delta15<=25)
		{
			$StrongStrike15++;
		}
		
		if($row15['type']=="0")
		{
			$CGPlus15++;
		}
		elseif($row15['type']==1)
		{
			$CGMin15++;
		}
		elseif($row15['type']==2)
		{
			$IC15++;
		}
	   
	   $DBJAMpetir1 = $row15['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row15['id'];?>, <?php echo $row15['latitude'];?>, <?php echo $row15['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row15['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db15->close();
}
?>

<!------------------------------TANGGAL 16------------------------------>
<?php
class MyDB16 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."16";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike16 = 0;
   $StrongStrike16 = 0;
   $CGPlus16 = 0;
   $CGMin16 = 0;
   $IC16 = 0;
   
   	$db16 = new MyDB16();
   $sql16 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret16 = $db16->query($sql16);
if(empty($ret16))
{
	?><script type="text/javascript">var locationsTGL16 = [0,0,0,0,3];</script><?php
	$db16->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL16 = [
			<?php
   while($row16 = $ret16->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta16=(sqrt((($row16['latitude']-(-8.67694))*($row16['latitude']-(-8.67694)))+(($row16['longitude']-112.21)*($row16['longitude']-112.21))))*111;
	   
		$Strike16++;
		
		if($Delta16<=25)
		{
			$StrongStrike16++;
		}
		
		if($row16['type']=="0")
		{
			$CGPlus16++;
		}
		elseif($row16['type']==1)
		{
			$CGMin16++;
		}
		elseif($row16['type']==2)
		{
			$IC16++;
		}
	   
	   $DBJAMpetir1 = $row16['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row16['id'];?>, <?php echo $row16['latitude'];?>, <?php echo $row16['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row16['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db16->close();
}
?>

<!------------------------------TANGGAL 17------------------------------>
<?php
class MyDB17 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."17";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike17 = 0;
   $StrongStrike17 = 0;
   $CGPlus17 = 0;
   $CGMin17 = 0;
   $IC17 = 0;
   
   	$db17 = new MyDB17();
   $sql17 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret17 = $db17->query($sql17);
if(empty($ret17))
{
	?><script type="text/javascript">var locationsTGL17 = [0,0,0,0,3];</script><?php
	$db17->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL17 = [
			<?php
   while($row17 = $ret17->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta17=(sqrt((($row17['latitude']-(-8.67694))*($row17['latitude']-(-8.67694)))+(($row17['longitude']-112.21)*($row17['longitude']-112.21))))*111;
	   
		$Strike17++;
		
		if($Delta17<=25)
		{
			$StrongStrike17++;
		}
		
		if($row17['type']=="0")
		{
			$CGPlus17++;
		}
		elseif($row17['type']==1)
		{
			$CGMin17++;
		}
		elseif($row17['type']==2)
		{
			$IC17++;
		}
	   
	   $DBJAMpetir1 = $row17['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row17['id'];?>, <?php echo $row17['latitude'];?>, <?php echo $row17['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row17['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db17->close();
}
?>

<!------------------------------TANGGAL 18------------------------------>
<?php
class MyDB18 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."18";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike18 = 0;
   $StrongStrike18 = 0;
   $CGPlus18 = 0;
   $CGMin18 = 0;
   $IC18 = 0;
   
   	$db18 = new MyDB18();
   $sql18 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret18 = $db18->query($sql18);
if(empty($ret18))
{
	?><script type="text/javascript">var locationsTGL18 = [0,0,0,0,3];</script><?php
	$db18->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL18 = [
			<?php
   while($row18 = $ret18->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta18=(sqrt((($row18['latitude']-(-8.67694))*($row18['latitude']-(-8.67694)))+(($row18['longitude']-112.21)*($row18['longitude']-112.21))))*111;
	   
		$Strike18++;
		
		if($Delta18<=25)
		{
			$StrongStrike18++;
		}
		
		if($row18['type']=="0")
		{
			$CGPlus18++;
		}
		elseif($row18['type']==1)
		{
			$CGMin18++;
		}
		elseif($row18['type']==2)
		{
			$IC18++;
		}
	   
	   $DBJAMpetir1 = $row18['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row18['id'];?>, <?php echo $row18['latitude'];?>, <?php echo $row18['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row18['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db18->close();
}
?>

<!------------------------------TANGGAL 19------------------------------>
<?php
class MyDB19 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."19";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike19 = 0;
   $StrongStrike19 = 0;
   $CGPlus19 = 0;
   $CGMin19 = 0;
   $IC19 = 0;
   
   	$db19 = new MyDB19();
   $sql19 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret19 = $db19->query($sql19);
if(empty($ret19))
{
	?><script type="text/javascript">var locationsTGL19 = [0,0,0,0,3];</script><?php
	$db19->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL19 = [
			<?php
   while($row19 = $ret19->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta19=(sqrt((($row19['latitude']-(-8.67694))*($row19['latitude']-(-8.67694)))+(($row19['longitude']-112.21)*($row19['longitude']-112.21))))*111;
	   
		$Strike19++;
		
		if($Delta19<=25)
		{
			$StrongStrike19++;
		}
		
		if($row19['type']=="0")
		{
			$CGPlus19++;
		}
		elseif($row19['type']==1)
		{
			$CGMin19++;
		}
		elseif($row19['type']==2)
		{
			$IC19++;
		}
	   
	   $DBJAMpetir1 = $row19['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row19['id'];?>, <?php echo $row19['latitude'];?>, <?php echo $row19['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row19['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db19->close();
}
?>

<!------------------------------TANGGAL 20------------------------------>
<?php
class MyDB20 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."20";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike20 = 0;
   $StrongStrike20 = 0;
   $CGPlus20 = 0;
   $CGMin20 = 0;
   $IC20 = 0;
   
   	$db20 = new MyDB20();
   $sql20 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret20 = $db20->query($sql20);
if(empty($ret20))
{
	?><script type="text/javascript">var locationsTGL20 = [0,0,0,0,3];</script><?php
	$db20->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL20 = [
			<?php
   while($row20 = $ret20->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta20=(sqrt((($row20['latitude']-(-8.67694))*($row20['latitude']-(-8.67694)))+(($row20['longitude']-112.21)*($row20['longitude']-112.21))))*111;
	   
		$Strike20++;
		
		if($Delta20<=25)
		{
			$StrongStrike20++;
		}
		
		if($row20['type']=="0")
		{
			$CGPlus20++;
		}
		elseif($row20['type']==1)
		{
			$CGMin20++;
		}
		elseif($row20['type']==2)
		{
			$IC20++;
		}
	   
	   $DBJAMpetir1 = $row20['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row20['id'];?>, <?php echo $row20['latitude'];?>, <?php echo $row20['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row20['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db20->close();
}
?>

<!------------------------------TANGGAL 21------------------------------>
<?php
class MyDB21 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."21";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike21 = 0;
   $StrongStrike21 = 0;
   $CGPlus21 = 0;
   $CGMin21 = 0;
   $IC21 = 0;
   
   	$db21 = new MyDB21();
   $sql21 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret21 = $db21->query($sql21);
if(empty($ret21))
{
	?><script type="text/javascript">var locationsTGL21 = [0,0,0,0,3];</script><?php
	$db21->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL21 = [
			<?php
   while($row21 = $ret21->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta21=(sqrt((($row21['latitude']-(-8.67694))*($row21['latitude']-(-8.67694)))+(($row21['longitude']-112.21)*($row21['longitude']-112.21))))*111;
	   
		$Strike21++;
		
		if($Delta21<=25)
		{
			$StrongStrike21++;
		}
		
		if($row21['type']=="0")
		{
			$CGPlus21++;
		}
		elseif($row21['type']==1)
		{
			$CGMin21++;
		}
		elseif($row21['type']==2)
		{
			$IC21++;
		}
	   
	   $DBJAMpetir1 = $row21['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row21['id'];?>, <?php echo $row21['latitude'];?>, <?php echo $row21['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row21['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db21->close();
}
?>

<!------------------------------TANGGAL 22------------------------------>
<?php
class MyDB22 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."22";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike22 = 0;
   $StrongStrike22 = 0;
   $CGPlus22 = 0;
   $CGMin22 = 0;
   $IC22 = 0;
   
   	$db22 = new MyDB22();
   $sql22 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret22 = $db22->query($sql22);
if(empty($ret22))
{
	?><script type="text/javascript">var locationsTGL22 = [0,0,0,0,3];</script><?php
	$db22->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL22 = [
			<?php
   while($row22 = $ret22->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta22=(sqrt((($row22['latitude']-(-8.67694))*($row22['latitude']-(-8.67694)))+(($row22['longitude']-112.21)*($row22['longitude']-112.21))))*111;
	   
		$Strike22++;
		
		if($Delta22<=25)
		{
			$StrongStrike22++;
		}
		
		if($row22['type']=="0")
		{
			$CGPlus22++;
		}
		elseif($row22['type']==1)
		{
			$CGMin22++;
		}
		elseif($row22['type']==2)
		{
			$IC22++;
		}
	   
	   $DBJAMpetir1 = $row22['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row22['id'];?>, <?php echo $row22['latitude'];?>, <?php echo $row22['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row22['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db22->close();
}
?>

<!------------------------------TANGGAL 23------------------------------>
<?php
class MyDB23 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."23";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike23 = 0;
   $StrongStrike23 = 0;
   $CGPlus23 = 0;
   $CGMin23 = 0;
   $IC23 = 0;
   
   	$db23 = new MyDB23();
   $sql23 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret23 = $db23->query($sql23);
if(empty($ret23))
{
	?><script type="text/javascript">var locationsTGL23 = [0,0,0,0,3];</script><?php
	$db23->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL23 = [
			<?php
   while($row23 = $ret23->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta23=(sqrt((($row23['latitude']-(-8.67694))*($row23['latitude']-(-8.67694)))+(($row23['longitude']-112.21)*($row23['longitude']-112.21))))*111;
	   
		$Strike23++;
		
		if($Delta23<=25)
		{
			$StrongStrike23++;
		}
		
		if($row23['type']=="0")
		{
			$CGPlus23++;
		}
		elseif($row23['type']==1)
		{
			$CGMin23++;
		}
		elseif($row23['type']==2)
		{
			$IC23++;
		}
	   
	   $DBJAMpetir1 = $row23['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row23['id'];?>, <?php echo $row23['latitude'];?>, <?php echo $row23['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row23['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db23->close();
}
?>

<!------------------------------TANGGAL 24------------------------------>
<?php
class MyDB24 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."24";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike24 = 0;
   $StrongStrike24 = 0;
   $CGPlus24 = 0;
   $CGMin24 = 0;
   $IC24 = 0;
   
   	$db24 = new MyDB24();
   $sql24 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret24 = $db24->query($sql24);
if(empty($ret24))
{
	?><script type="text/javascript">var locationsTGL24 = [0,0,0,0,3];</script><?php
	$db24->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL24 = [
			<?php
   while($row24 = $ret24->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta24=(sqrt((($row24['latitude']-(-8.67694))*($row24['latitude']-(-8.67694)))+(($row24['longitude']-112.21)*($row24['longitude']-112.21))))*111;
	   
		$Strike24++;
		
		if($Delta24<=25)
		{
			$StrongStrike24++;
		}
		
		if($row24['type']=="0")
		{
			$CGPlus24++;
		}
		elseif($row24['type']==1)
		{
			$CGMin24++;
		}
		elseif($row24['type']==2)
		{
			$IC24++;
		}
	   
	   $DBJAMpetir1 = $row24['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row24['id'];?>, <?php echo $row24['latitude'];?>, <?php echo $row24['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row24['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db24->close();
}
?>

<!------------------------------TANGGAL 25------------------------------>
<?php
class MyDB25 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."25";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike25 = 0;
   $StrongStrike25 = 0;
   $CGPlus25 = 0;
   $CGMin25 = 0;
   $IC25 = 0;
   
   	$db25 = new MyDB25();
   $sql25 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret25 = $db25->query($sql25);
   if(empty($ret25))
{
	?><script type="text/javascript">var locationsTGL25 = [0,0,0,0,3];</script><?php
	$db25->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL25 = [
			<?php
   while($row25 = $ret25->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta25=(sqrt((($row25['latitude']-(-8.67694))*($row25['latitude']-(-8.67694)))+(($row25['longitude']-112.21)*($row25['longitude']-112.21))))*111;
	   
		$Strike25++;
		
		if($Delta25<=25)
		{
			$StrongStrike25++;
		}
		
		if($row25['type']=="0")
		{
			$CGPlus25++;
		}
		elseif($row25['type']==1)
		{
			$CGMin25++;
		}
		elseif($row25['type']==2)
		{
			$IC25++;
		}
	   
	   $DBJAMpetir1 = $row25['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row25['id'];?>, <?php echo $row25['latitude'];?>, <?php echo $row25['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row25['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db25->close();
}
?>

<!------------------------------TANGGAL 26------------------------------>
<?php
class MyDB26 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."26";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike26 = 0;
   $StrongStrike26 = 0;
   $CGPlus26 = 0;
   $CGMin26 = 0;
   $IC26 = 0;
   
   	$db26 = new MyDB26();
   $sql26 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret26 = $db26->query($sql26);
if(empty($ret26))
{
	?><script type="text/javascript">var locationsTGL26 = [0,0,0,0,3];</script><?php
	$db26->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL26 = [
			<?php
   while($row26 = $ret26->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta26=(sqrt((($row26['latitude']-(-8.67694))*($row26['latitude']-(-8.67694)))+(($row26['longitude']-112.21)*($row26['longitude']-112.21))))*111;
	   
		$Strike26++;
		
		if($Delta26<=25)
		{
			$StrongStrike26++;
		}
		
		if($row26['type']=="0")
		{
			$CGPlus26++;
		}
		elseif($row26['type']==1)
		{
			$CGMin26++;
		}
		elseif($row26['type']==2)
		{
			$IC26++;
		}
	   
	   $DBJAMpetir1 = $row26['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row26['id'];?>, <?php echo $row26['latitude'];?>, <?php echo $row26['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row26['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db26->close();
}
?>

<!------------------------------TANGGAL 27------------------------------>
<?php
class MyDB27 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."27";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike27 = 0;
   $StrongStrike27 = 0;
   $CGPlus27 = 0;
   $CGMin27 = 0;
   $IC27 = 0;
   
   	$db27 = new MyDB27();
   $sql27 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret27 = $db27->query($sql27);
if(empty($ret27))
{
	?><script type="text/javascript">var locationsTGL27 = [0,0,0,0,3];</script><?php
	$db27->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL27 = [
			<?php
   while($row27 = $ret27->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta27=(sqrt((($row27['latitude']-(-8.67694))*($row27['latitude']-(-8.67694)))+(($row27['longitude']-112.21)*($row27['longitude']-112.21))))*111;
	   
		$Strike27++;
		
		if($Delta27<=25)
		{
			$StrongStrike27++;
		}
		
		if($row27['type']=="0")
		{
			$CGPlus27++;
		}
		elseif($row27['type']==1)
		{
			$CGMin27++;
		}
		elseif($row27['type']==2)
		{
			$IC27++;
		}
	   
	   $DBJAMpetir1 = $row27['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row27['id'];?>, <?php echo $row27['latitude'];?>, <?php echo $row27['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row27['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db27->close();
}
?>

<!------------------------------TANGGAL 28------------------------------>
<?php
class MyDB28 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."28";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike28 = 0;
   $StrongStrike28 = 0;
   $CGPlus28 = 0;
   $CGMin28 = 0;
   $IC28 = 0;
   
   	$db28 = new MyDB28();
   $sql28 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret28 = $db28->query($sql28);
if(empty($ret28))
{
	?><script type="text/javascript">var locationsTGL28 = [0,0,0,0,3];</script><?php
	$db28->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL28 = [
			<?php
   while($row28 = $ret28->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta28=(sqrt((($row28['latitude']-(-8.67694))*($row28['latitude']-(-8.67694)))+(($row28['longitude']-112.21)*($row28['longitude']-112.21))))*111;
	   
		$Strike28++;
		
		if($Delta28<=25)
		{
			$StrongStrike28++;
		}
		
		if($row28['type']=="0")
		{
			$CGPlus28++;
		}
		elseif($row28['type']==1)
		{
			$CGMin28++;
		}
		elseif($row28['type']==2)
		{
			$IC28++;
		}
	   
	   $DBJAMpetir1 = $row28['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row28['id'];?>, <?php echo $row28['latitude'];?>, <?php echo $row28['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row28['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db28->close();
}
?>

<!------------------------------TANGGAL 29------------------------------>
<?php
class MyDB29 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."29";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike29 = 0;
   $StrongStrike29 = 0;
   $CGPlus29 = 0;
   $CGMin29 = 0;
   $IC29 = 0;
   
   	$db29 = new MyDB29();
   $sql29 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret29 = $db29->query($sql29);
if(empty($ret29))
{
	?><script type="text/javascript">var locationsTGL29 = [0,0,0,0,3];</script><?php
	$db29->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL29 = [
			<?php
   while($row29 = $ret29->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta29=(sqrt((($row29['latitude']-(-8.67694))*($row29['latitude']-(-8.67694)))+(($row29['longitude']-112.21)*($row29['longitude']-112.21))))*111;
	   
		$Strike29++;
		
		if($Delta29<=25)
		{
			$StrongStrike29++;
		}
		
		if($row29['type']=="0")
		{
			$CGPlus29++;
		}
		elseif($row29['type']==1)
		{
			$CGMin29++;
		}
		elseif($row29['type']==2)
		{
			$IC29++;
		}
	   
	   $DBJAMpetir1 = $row29['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row29['id'];?>, <?php echo $row29['latitude'];?>, <?php echo $row29['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row29['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db29->close();
}
?>

<!------------------------------TANGGAL 30------------------------------>
<?php
class MyDB30 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."30";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike30 = 0;
   $StrongStrike30 = 0;
   $CGPlus30 = 0;
   $CGMin30 = 0;
   $IC30 = 0;
   
   	$db30 = new MyDB30();
   $sql30 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret30 = $db30->query($sql30);
if(empty($ret30))
{
	?><script type="text/javascript">var locationsTGL30 = [0,0,0,0,3];</script><?php
	$db30->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL30 = [
			<?php
   while($row30 = $ret30->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta30=(sqrt((($row30['latitude']-(-8.67694))*($row30['latitude']-(-8.67694)))+(($row30['longitude']-112.21)*($row30['longitude']-112.21))))*111;
	   
		$Strike30++;
		
		if($Delta30<=25)
		{
			$StrongStrike30++;
		}
		
		if($row30['type']=="0")
		{
			$CGPlus30++;
		}
		elseif($row30['type']==1)
		{
			$CGMin30++;
		}
		elseif($row30['type']==2)
		{
			$IC30++;
		}
	   
	   $DBJAMpetir1 = $row30['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row30['id'];?>, <?php echo $row30['latitude'];?>, <?php echo $row30['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row30['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db30->close();
}
?>

<!------------------------------TANGGAL 31------------------------------>
<?php
class MyDB31 extends SQLite3
   {
      function __construct()
      {
		 $BLN_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."31";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$BLN_2.'.db3');
      }
   }
   
   $Strike31 = 0;
   $StrongStrike31 = 0;
   $CGPlus31 = 0;
   $CGMin31 = 0;
   $IC31 = 0;
   
   	$db31 = new MyDB31();
   $sql31 =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret31 = $db31->query($sql31);
if(empty($ret31))
{
	?><script type="text/javascript">var locationsTGL31 = [0,0,0,0,3];</script><?php
	$db31->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL31 = [
			<?php
   while($row31 = $ret31->fetchArray(SQLITE3_ASSOC) )
   {
	   
	   $Delta31=(sqrt((($row31['latitude']-(-8.67694))*($row31['latitude']-(-8.67694)))+(($row31['longitude']-112.21)*($row31['longitude']-112.21))))*111;
	   
		$Strike31++;
		
		if($Delta31<=25)
		{
			$StrongStrike31++;
		}
		
		if($row31['type']=="0")
		{
			$CGPlus31++;
		}
		elseif($row31['type']==1)
		{
			$CGMin31++;
		}
		elseif($row31['type']==2)
		{
			$IC31++;
		}
	   
	   $DBJAMpetir1 = $row31['datetime_utc'];
					$JAMpetir1 = explode(" ", $DBJAMpetir1);
					$DJAMpetir1 = explode(":", $JAMpetir1[1]);

						$cekUTCtoWITApetir1 = $DJAMpetir1[0] + 8;
						if($cekUTCtoWITApetir1 < 0)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 + 24; }
						elseif($cekUTCtoWITApetir1 == 0)
						{ $tmpUTCtoWITApetir1 = "00"; }
						elseif($cekUTCtoWITApetir1 > 24)
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1 - 24; }
						elseif($cekUTCtoWITApetir1 == 24)
						{ $tmpUTCtoWITApetir1 = "00"; }
						else
						{ $tmpUTCtoWITApetir1 = $cekUTCtoWITApetir1; }

						if($tmpUTCtoWITApetir1 < 10)
						{ $UTCtoWITApetir1 = "0".$tmpUTCtoWITApetir1; }
						else
						{ $UTCtoWITApetir1 = $tmpUTCtoWITApetir1; }

						$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA";

					?>
					[<?php echo $row31['id'];?>, <?php echo $row31['latitude'];?>, <?php echo $row31['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row31['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db31->close();
}

$totalStrike =
$Strike01 + $Strike02 + $Strike03 + $Strike04 + $Strike05 + $Strike06 + $Strike07 + $Strike08 + $Strike09 + $Strike10 + $Strike11 + $Strike12 + $Strike13 + $Strike14 + $Strike15 + $Strike16 + $Strike17 + $Strike18 + $Strike19 + $Strike20 + $Strike21 + $Strike22 + $Strike23 + $Strike24 + $Strike25 + $Strike26 + $Strike27 + $Strike28 + $Strike29 + $Strike30 + $Strike31;

$totalStrongStrike =
$StrongStrike01 + $StrongStrike02 + $StrongStrike03 + $StrongStrike04 + $StrongStrike05 + $StrongStrike06 + $StrongStrike07 + $StrongStrike08 + $StrongStrike09 + $StrongStrike10 + $StrongStrike11 + $StrongStrike12 + $StrongStrike13 + $StrongStrike14 + $StrongStrike15 + $StrongStrike16 + $StrongStrike17 + $StrongStrike18 + $StrongStrike19 + $StrongStrike20 + $StrongStrike21 + $StrongStrike22 + $StrongStrike23 + $StrongStrike24 + $StrongStrike25 + $StrongStrike26 + $StrongStrike27 + $StrongStrike28 + $StrongStrike29 + $StrongStrike30 + $StrongStrike31;

$totalCGPlus =
$CGPlus01 + $CGPlus02 + $CGPlus03 + $CGPlus04 + $CGPlus05 + $CGPlus06 + $CGPlus07 + $CGPlus08 + $CGPlus09 + $CGPlus10 + $CGPlus11 + $CGPlus12 + $CGPlus13 + $CGPlus14 + $CGPlus15 + $CGPlus16 + $CGPlus17 + $CGPlus18 + $CGPlus19 + $CGPlus20 + $CGPlus21 + $CGPlus22 + $CGPlus23 + $CGPlus24 + $CGPlus25 + $CGPlus26 + $CGPlus27 + $CGPlus28 + $CGPlus29 + $CGPlus30 + $CGPlus31;

$totalCGMin =
$CGMin01 + $CGMin02 + $CGMin03 + $CGMin04 + $CGMin05 + $CGMin06 + $CGMin07 + $CGMin08 + $CGMin09 + $CGMin10 + $CGMin11 + $CGMin12 + $CGMin13 + $CGMin14 + $CGMin15 + $CGMin16 + $CGMin17 + $CGMin18 + $CGMin19 + $CGMin20 + $CGMin21 + $CGMin22 + $CGMin23 + $CGMin24 + $CGMin25 + $CGMin26 + $CGMin27 + $CGMin28 + $CGMin29 + $CGMin30 + $CGMin31;

$totalIC =
$IC01 + $IC02 + $IC03 + $IC04 + $IC05 + $IC06 + $IC07 + $IC08 + $IC09 + $IC10 + $IC11 + $IC12 + $IC13 + $IC14 + $IC15 + $IC16 + $IC17 + $IC18 + $IC19 + $IC20 + $IC21 + $IC22 + $IC23 + $IC24 + $IC25 + $IC26 + $IC27 + $IC28 + $IC29 + $IC30 + $IC31;

?>
