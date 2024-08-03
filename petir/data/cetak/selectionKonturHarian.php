<?php
class MyDBKontur extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."".$_POST['TGLGrid'];
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }

	$KolomGrid		= $_POST['Grid'];
	$BarisGrid		= $_POST['Grid'];
	$LatMin			= $_POST['LatMin'];
	$LatMax			= $_POST['LatMax'];
	$LongMin		= $_POST['LongMin'];
	$LongMax		= $_POST['LongMax'];
	$DotPlusLat		= ($LatMin-($LatMax)) / $BarisGrid;
	$DotPlusLong	= ($LongMax-$LongMin) / $KolomGrid;
	
	for($y=0; $y<$KolomGrid; $y++)
	{
		for($z=0; $z<$BarisGrid; $z++)
		{
			$ValueBox[$y][$z]=0;
		}
	}
   
   	$dbKontur = new MyDBKontur();
   $sqlKontur =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur = $dbKontur->query($sqlKontur);
if(empty($retKontur))
{
	echo "<center><font color='red'><h2>TIDAK ADA DATA</h2></font></center>";
	$dbKontur->close();
}
else
{
 	while($rowKontur = $retKontur->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData	= $rowKontur['latitude'];
		$LongData	= $rowKontur['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData<=($LatMin-($DotPlusLat*$y)) && $LatData>=($LatMin-($DotPlusLat*($y+1))) && $LongData>=($LongMin+($DotPlusLong*$z)) && $LongData<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox[$y][$z]++;
				}
			}
		}
	}
	$dbKontur->close();
}
?>