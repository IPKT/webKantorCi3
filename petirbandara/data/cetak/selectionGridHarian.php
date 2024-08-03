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
	
	$TGL_1 = $_POST['TGLGrid']."/".$_POST['BLNGrid']."/".$_POST['THNGrid'];

   class MyDB extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."".$_POST['TGLGrid'];
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   $Strike = 0;
   $StrongStrike = 0;
   $CGPlus = 0;
   $CGMin = 0;
   $IC = 0;

	$KolomGrid		= $_POST['Grid'];
	$BarisGrid		= $_POST['Grid'];
	$LatMin			= $_POST['LatMin'];
	$LatMax			= $_POST['LatMax'];
	$LongMin		= $_POST['LongMin'];
	$LongMax		= $_POST['LongMax'];
	$DotPlusLat		= ($LatMin-($LatMax)) / $BarisGrid;
	$DotPlusLong	= ($LongMax-$LongMin) / $KolomGrid;
   
   	$db = new MyDB();
   $sql =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret = $db->query($sql);
if(empty($ret))
{
	$db->close();
}
else
{
	?>
	<script type="text/javascript">
		var locationsTGL = [
			<?php
			   while($row = $ret->fetchArray(SQLITE3_ASSOC) )
			   {
				   $Delta=(sqrt((($row['latitude']-(-8.67694))*($row['latitude']-(-8.67694)))+(($row['longitude']-112.21)*($row['longitude']-112.21))))*111;

					$Strike++;

					if($Delta<=25)
					{
						$StrongStrike++;
					}

					if($row['type']=="0")
					{
						$CGPlus++;
					}
					elseif($row['type']==1)
					{
						$CGMin++;
					}
					elseif($row['type']==2)
					{
						$IC++;
					}

					$ID=$row['id'];
				    
				   	$DBJAMpetir1 = $row['datetime_utc'];
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
					[<?php echo $row['id'];?>, <?php echo $row['latitude'];?>, <?php echo $row['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $row['type'];?>],
					<?php
			   }
			?>
		];
	</script>
	<?php
   $db->close();
}
?>