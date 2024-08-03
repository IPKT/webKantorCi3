<?php
	$KolomGrid		= $_POST['Grid'];
	$BarisGrid		= $_POST['Grid'];
	$LatMin			= $_POST['LatMin'];
	$LatMax			= $_POST['LatMax'];
	$LongMin		= $_POST['LongMin'];
	$LongMax		= $_POST['LongMax'];
	$DotPlusLat		= ($LatMin-($LatMax)) / $BarisGrid;
	$DotPlusLong	= ($LongMax-$LongMin) / $KolomGrid;


//------------------------------TANGGAL 01------------------------------
class MyDBKontur01 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."01";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur01 = new MyDBKontur01();
   $sqlKontur01 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur01 = $dbKontur01->query($sqlKontur01);
if(empty($retKontur01))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox01[$y][$z]=0; } }
	$dbKontur01->close();
}
else
{
 	while($rowKontur01 = $retKontur01->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData01	= $rowKontur01['latitude'];
		$LongData01	= $rowKontur01['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData01<=($LatMin-($DotPlusLat*$y)) && $LatData01>=($LatMin-($DotPlusLat*($y+1))) && $LongData01>=($LongMin+($DotPlusLong*$z)) && $LongData01<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox01[$y][$z]++;
				}
			}
		}
	}
	$dbKontur01->close();
}

//------------------------------TANGGAL 02------------------------------
class MyDBKontur02 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."02";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur02 = new MyDBKontur02();
   $sqlKontur02 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur02 = $dbKontur02->query($sqlKontur02);
if(empty($retKontur02))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox02[$y][$z]=0; } }
	$dbKontur02->close();
}
else
{
 	while($rowKontur02 = $retKontur02->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData02	= $rowKontur02['latitude'];
		$LongData02	= $rowKontur02['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData02<=($LatMin-($DotPlusLat*$y)) && $LatData02>=($LatMin-($DotPlusLat*($y+1))) && $LongData02>=($LongMin+($DotPlusLong*$z)) && $LongData02<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox02[$y][$z]++;
				}
			}
		}
	}
	$dbKontur02->close();
}

//------------------------------TANGGAL 03------------------------------
class MyDBKontur03 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."03";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur03 = new MyDBKontur03();
   $sqlKontur03 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur03 = $dbKontur03->query($sqlKontur03);
if(empty($retKontur03))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox03[$y][$z]=0; } }
	$dbKontur03->close();
}
else
{
 	while($rowKontur03 = $retKontur03->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData03	= $rowKontur03['latitude'];
		$LongData03	= $rowKontur03['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData03<=($LatMin-($DotPlusLat*$y)) && $LatData03>=($LatMin-($DotPlusLat*($y+1))) && $LongData03>=($LongMin+($DotPlusLong*$z)) && $LongData03<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox03[$y][$z]++;
				}
			}
		}
	}
	$dbKontur03->close();
}

//------------------------------TANGGAL 04------------------------------
class MyDBKontur04 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."04";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur04 = new MyDBKontur04();
   $sqlKontur04 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur04 = $dbKontur04->query($sqlKontur04);
if(empty($retKontur04))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox04[$y][$z]=0; } }
	$dbKontur04->close();
}
else
{
 	while($rowKontur04 = $retKontur04->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData04	= $rowKontur04['latitude'];
		$LongData04	= $rowKontur04['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData04<=($LatMin-($DotPlusLat*$y)) && $LatData04>=($LatMin-($DotPlusLat*($y+1))) && $LongData04>=($LongMin+($DotPlusLong*$z)) && $LongData04<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox04[$y][$z]++;
				}
			}
		}
	}
	$dbKontur04->close();
}

//------------------------------TANGGAL 05------------------------------
class MyDBKontur05 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."05";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur05 = new MyDBKontur05();
   $sqlKontur05 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur05 = $dbKontur05->query($sqlKontur05);
if(empty($retKontur05))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox05[$y][$z]=0; } }
	$dbKontur05->close();
}
else
{
 	while($rowKontur05 = $retKontur05->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData05	= $rowKontur05['latitude'];
		$LongData05	= $rowKontur05['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData05<=($LatMin-($DotPlusLat*$y)) && $LatData05>=($LatMin-($DotPlusLat*($y+1))) && $LongData05>=($LongMin+($DotPlusLong*$z)) && $LongData05<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox05[$y][$z]++;
				}
			}
		}
	}
	$dbKontur05->close();
}

//------------------------------TANGGAL 06------------------------------
class MyDBKontur06 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."06";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur06 = new MyDBKontur06();
   $sqlKontur06 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur06 = $dbKontur06->query($sqlKontur06);
if(empty($retKontur06))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox06[$y][$z]=0; } }
	$dbKontur06->close();
}
else
{
 	while($rowKontur06 = $retKontur06->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData06	= $rowKontur06['latitude'];
		$LongData06	= $rowKontur06['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData06<=($LatMin-($DotPlusLat*$y)) && $LatData06>=($LatMin-($DotPlusLat*($y+1))) && $LongData06>=($LongMin+($DotPlusLong*$z)) && $LongData06<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox06[$y][$z]++;
				}
			}
		}
	}
	$dbKontur06->close();
}

//------------------------------TANGGAL 07------------------------------
class MyDBKontur07 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."07";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur07 = new MyDBKontur07();
   $sqlKontur07 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur07 = $dbKontur07->query($sqlKontur07);
if(empty($retKontur07))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox07[$y][$z]=0; } }
	$dbKontur07->close();
}
else
{
 	while($rowKontur07 = $retKontur07->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData07	= $rowKontur07['latitude'];
		$LongData07	= $rowKontur07['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData07<=($LatMin-($DotPlusLat*$y)) && $LatData07>=($LatMin-($DotPlusLat*($y+1))) && $LongData07>=($LongMin+($DotPlusLong*$z)) && $LongData07<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox07[$y][$z]++;
				}
			}
		}
	}
	$dbKontur07->close();
}

//------------------------------TANGGAL 08------------------------------
class MyDBKontur08 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."08";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur08 = new MyDBKontur08();
   $sqlKontur08 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur08 = $dbKontur08->query($sqlKontur08);
if(empty($retKontur08))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox08[$y][$z]=0; } }
	$dbKontur08->close();
}
else
{
 	while($rowKontur08 = $retKontur08->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData08	= $rowKontur08['latitude'];
		$LongData08	= $rowKontur08['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData08<=($LatMin-($DotPlusLat*$y)) && $LatData08>=($LatMin-($DotPlusLat*($y+1))) && $LongData08>=($LongMin+($DotPlusLong*$z)) && $LongData08<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox08[$y][$z]++;
				}
			}
		}
	}
	$dbKontur08->close();
}

//------------------------------TANGGAL 09------------------------------
class MyDBKontur09 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."09";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur09 = new MyDBKontur09();
   $sqlKontur09 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur09 = $dbKontur09->query($sqlKontur09);
if(empty($retKontur09))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox09[$y][$z]=0; } }
	$dbKontur09->close();
}
else
{
 	while($rowKontur09 = $retKontur09->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData09	= $rowKontur09['latitude'];
		$LongData09	= $rowKontur09['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData09<=($LatMin-($DotPlusLat*$y)) && $LatData09>=($LatMin-($DotPlusLat*($y+1))) && $LongData09>=($LongMin+($DotPlusLong*$z)) && $LongData09<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox09[$y][$z]++;
				}
			}
		}
	}
	$dbKontur09->close();
}

//------------------------------TANGGAL 10------------------------------
class MyDBKontur10 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."10";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur10 = new MyDBKontur10();
   $sqlKontur10 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur10 = $dbKontur10->query($sqlKontur10);
if(empty($retKontur10))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox10[$y][$z]=0; } }
	$dbKontur10->close();
}
else
{
 	while($rowKontur10 = $retKontur10->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData10	= $rowKontur10['latitude'];
		$LongData10	= $rowKontur10['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData10<=($LatMin-($DotPlusLat*$y)) && $LatData10>=($LatMin-($DotPlusLat*($y+1))) && $LongData10>=($LongMin+($DotPlusLong*$z)) && $LongData10<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox10[$y][$z]++;
				}
			}
		}
	}
	$dbKontur10->close();
}

//------------------------------TANGGAL 11------------------------------
class MyDBKontur11 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."11";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur11 = new MyDBKontur11();
   $sqlKontur11 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur11 = $dbKontur11->query($sqlKontur11);
if(empty($retKontur11))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox11[$y][$z]=0; } }
	$dbKontur11->close();
}
else
{
 	while($rowKontur11 = $retKontur11->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData11	= $rowKontur11['latitude'];
		$LongData11	= $rowKontur11['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData11<=($LatMin-($DotPlusLat*$y)) && $LatData11>=($LatMin-($DotPlusLat*($y+1))) && $LongData11>=($LongMin+($DotPlusLong*$z)) && $LongData11<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox11[$y][$z]++;
				}
			}
		}
	}
	$dbKontur11->close();
}

//------------------------------TANGGAL 12------------------------------
class MyDBKontur12 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."12";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur12 = new MyDBKontur12();
   $sqlKontur12 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur12 = $dbKontur12->query($sqlKontur12);
if(empty($retKontur12))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox12[$y][$z]=0; } }
	$dbKontur12->close();
}
else
{
 	while($rowKontur12 = $retKontur12->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData12	= $rowKontur12['latitude'];
		$LongData12	= $rowKontur12['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData12<=($LatMin-($DotPlusLat*$y)) && $LatData12>=($LatMin-($DotPlusLat*($y+1))) && $LongData12>=($LongMin+($DotPlusLong*$z)) && $LongData12<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox12[$y][$z]++;
				}
			}
		}
	}
	$dbKontur12->close();
}

//------------------------------TANGGAL 13------------------------------
class MyDBKontur13 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."13";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur13 = new MyDBKontur13();
   $sqlKontur13 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur13 = $dbKontur13->query($sqlKontur13);
if(empty($retKontur13))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox13[$y][$z]=0; } }
	$dbKontur13->close();
}
else
{
 	while($rowKontur13 = $retKontur13->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData13	= $rowKontur13['latitude'];
		$LongData13	= $rowKontur13['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData13<=($LatMin-($DotPlusLat*$y)) && $LatData13>=($LatMin-($DotPlusLat*($y+1))) && $LongData13>=($LongMin+($DotPlusLong*$z)) && $LongData13<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox13[$y][$z]++;
				}
			}
		}
	}
	$dbKontur13->close();
}

//------------------------------TANGGAL 14------------------------------
class MyDBKontur14 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."14";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur14 = new MyDBKontur14();
   $sqlKontur14 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur14 = $dbKontur14->query($sqlKontur14);
if(empty($retKontur14))
{
	
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox14[$y][$z]=0; } }
	$dbKontur14->close();
}
else
{
 	while($rowKontur14 = $retKontur14->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData14	= $rowKontur14['latitude'];
		$LongData14	= $rowKontur14['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData14<=($LatMin-($DotPlusLat*$y)) && $LatData14>=($LatMin-($DotPlusLat*($y+1))) && $LongData14>=($LongMin+($DotPlusLong*$z)) && $LongData14<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox14[$y][$z]++;
				}
			}
		}
	}
	$dbKontur14->close();
}

//------------------------------TANGGAL 15------------------------------
class MyDBKontur15 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."15";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur15 = new MyDBKontur15();
   $sqlKontur15 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur15 = $dbKontur15->query($sqlKontur15);
if(empty($retKontur15))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox15[$y][$z]=0; } }
	$dbKontur15->close();
}
else
{
 	while($rowKontur15 = $retKontur15->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData15	= $rowKontur15['latitude'];
		$LongData15	= $rowKontur15['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData15<=($LatMin-($DotPlusLat*$y)) && $LatData15>=($LatMin-($DotPlusLat*($y+1))) && $LongData15>=($LongMin+($DotPlusLong*$z)) && $LongData15<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox15[$y][$z]++;
				}
			}
		}
	}
	$dbKontur15->close();
}

//------------------------------TANGGAL 16------------------------------
class MyDBKontur16 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."16";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur16 = new MyDBKontur16();
   $sqlKontur16 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur16 = $dbKontur16->query($sqlKontur16);
if(empty($retKontur16))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox16[$y][$z]=0; } }
	$dbKontur16->close();
}
else
{
 	while($rowKontur16 = $retKontur16->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData16	= $rowKontur16['latitude'];
		$LongData16	= $rowKontur16['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData16<=($LatMin-($DotPlusLat*$y)) && $LatData16>=($LatMin-($DotPlusLat*($y+1))) && $LongData16>=($LongMin+($DotPlusLong*$z)) && $LongData16<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox16[$y][$z]++;
				}
			}
		}
	}
	$dbKontur16->close();
}

//------------------------------TANGGAL 17------------------------------
class MyDBKontur17 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."17";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur17 = new MyDBKontur17();
   $sqlKontur17 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur17 = $dbKontur17->query($sqlKontur17);
if(empty($retKontur17))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox17[$y][$z]=0; } }
	$dbKontur17->close();
}
else
{
 	while($rowKontur17 = $retKontur17->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData17	= $rowKontur17['latitude'];
		$LongData17	= $rowKontur17['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData17<=($LatMin-($DotPlusLat*$y)) && $LatData17>=($LatMin-($DotPlusLat*($y+1))) && $LongData17>=($LongMin+($DotPlusLong*$z)) && $LongData17<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox17[$y][$z]++;
				}
			}
		}
	}
	$dbKontur17->close();
}

//------------------------------TANGGAL 18------------------------------
class MyDBKontur18 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."18";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur18 = new MyDBKontur18();
   $sqlKontur18 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur18 = $dbKontur18->query($sqlKontur18);
if(empty($retKontur18))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox18[$y][$z]=0; } }
	$dbKontur18->close();
}
else
{
 	while($rowKontur18 = $retKontur18->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData18	= $rowKontur18['latitude'];
		$LongData18	= $rowKontur18['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData18<=($LatMin-($DotPlusLat*$y)) && $LatData18>=($LatMin-($DotPlusLat*($y+1))) && $LongData18>=($LongMin+($DotPlusLong*$z)) && $LongData18<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox18[$y][$z]++;
				}
			}
		}
	}
	$dbKontur18->close();
}

//------------------------------TANGGAL 19------------------------------
class MyDBKontur19 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."19";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur19 = new MyDBKontur19();
   $sqlKontur19 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur19 = $dbKontur19->query($sqlKontur19);
if(empty($retKontur19))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox19[$y][$z]=0; } }
	$dbKontur19->close();
}
else
{
 	while($rowKontur19 = $retKontur19->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData19	= $rowKontur19['latitude'];
		$LongData19	= $rowKontur19['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData19<=($LatMin-($DotPlusLat*$y)) && $LatData19>=($LatMin-($DotPlusLat*($y+1))) && $LongData19>=($LongMin+($DotPlusLong*$z)) && $LongData19<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox19[$y][$z]++;
				}
			}
		}
	}
	$dbKontur19->close();
}

//------------------------------TANGGAL 20------------------------------
class MyDBKontur20 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."20";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur20 = new MyDBKontur20();
   $sqlKontur20 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur20 = $dbKontur20->query($sqlKontur20);
if(empty($retKontur20))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox20[$y][$z]=0; } }
	$dbKontur20->close();
}
else
{
 	while($rowKontur20 = $retKontur20->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData20	= $rowKontur20['latitude'];
		$LongData20	= $rowKontur20['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData20<=($LatMin-($DotPlusLat*$y)) && $LatData20>=($LatMin-($DotPlusLat*($y+1))) && $LongData20>=($LongMin+($DotPlusLong*$z)) && $LongData20<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox20[$y][$z]++;
				}
			}
		}
	}
	$dbKontur20->close();
}

//------------------------------TANGGAL 21------------------------------
class MyDBKontur21 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."21";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur21 = new MyDBKontur21();
   $sqlKontur21 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur21 = $dbKontur21->query($sqlKontur21);
if(empty($retKontur21))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox21[$y][$z]=0; } }
	$dbKontur21->close();
}
else
{
 	while($rowKontur21 = $retKontur21->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData21	= $rowKontur21['latitude'];
		$LongData21	= $rowKontur21['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData21<=($LatMin-($DotPlusLat*$y)) && $LatData21>=($LatMin-($DotPlusLat*($y+1))) && $LongData21>=($LongMin+($DotPlusLong*$z)) && $LongData21<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox21[$y][$z]++;
				}
			}
		}
	}
	$dbKontur21->close();
}

//------------------------------TANGGAL 22------------------------------
class MyDBKontur22 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."22";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur22 = new MyDBKontur22();
   $sqlKontur22 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur22 = $dbKontur22->query($sqlKontur22);
if(empty($retKontur22))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox22[$y][$z]=0; } }
	$dbKontur22->close();
}
else
{
 	while($rowKontur22 = $retKontur22->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData22	= $rowKontur22['latitude'];
		$LongData22	= $rowKontur22['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData22<=($LatMin-($DotPlusLat*$y)) && $LatData22>=($LatMin-($DotPlusLat*($y+1))) && $LongData22>=($LongMin+($DotPlusLong*$z)) && $LongData22<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox22[$y][$z]++;
				}
			}
		}
	}
	$dbKontur22->close();
}

//------------------------------TANGGAL 23------------------------------
class MyDBKontur23 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."23";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur23 = new MyDBKontur23();
   $sqlKontur23 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur23 = $dbKontur23->query($sqlKontur23);
if(empty($retKontur23))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox23[$y][$z]=0; } }
	$dbKontur23->close();
}
else
{
 	while($rowKontur23 = $retKontur23->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData23	= $rowKontur23['latitude'];
		$LongData23	= $rowKontur23['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData23<=($LatMin-($DotPlusLat*$y)) && $LatData23>=($LatMin-($DotPlusLat*($y+1))) && $LongData23>=($LongMin+($DotPlusLong*$z)) && $LongData23<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox23[$y][$z]++;
				}
			}
		}
	}
	$dbKontur23->close();
}

//------------------------------TANGGAL 24------------------------------
class MyDBKontur24 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."24";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur24 = new MyDBKontur24();
   $sqlKontur24 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur24 = $dbKontur24->query($sqlKontur24);
if(empty($retKontur24))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox24[$y][$z]=0; } }
	$dbKontur24->close();
}
else
{
 	while($rowKontur24 = $retKontur24->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData24	= $rowKontur24['latitude'];
		$LongData24	= $rowKontur24['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData24<=($LatMin-($DotPlusLat*$y)) && $LatData24>=($LatMin-($DotPlusLat*($y+1))) && $LongData24>=($LongMin+($DotPlusLong*$z)) && $LongData24<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox24[$y][$z]++;
				}
			}
		}
	}
	$dbKontur24->close();
}

//------------------------------TANGGAL 25------------------------------
class MyDBKontur25 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."25";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur25 = new MyDBKontur25();
   $sqlKontur25 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur25 = $dbKontur25->query($sqlKontur25);
if(empty($retKontur25))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox25[$y][$z]=0; } }
	$dbKontur25->close();
}
else
{
 	while($rowKontur25 = $retKontur25->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData25	= $rowKontur25['latitude'];
		$LongData25	= $rowKontur25['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData25<=($LatMin-($DotPlusLat*$y)) && $LatData25>=($LatMin-($DotPlusLat*($y+1))) && $LongData25>=($LongMin+($DotPlusLong*$z)) && $LongData25<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox25[$y][$z]++;
				}
			}
		}
	}
	$dbKontur25->close();
}

//------------------------------TANGGAL 26------------------------------
class MyDBKontur26 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."26";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur26 = new MyDBKontur26();
   $sqlKontur26 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur26 = $dbKontur26->query($sqlKontur26);
if(empty($retKontur26))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox26[$y][$z]=0; } }
	$dbKontur26->close();
}
else
{
 	while($rowKontur26 = $retKontur26->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData26	= $rowKontur26['latitude'];
		$LongData26	= $rowKontur26['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData26<=($LatMin-($DotPlusLat*$y)) && $LatData26>=($LatMin-($DotPlusLat*($y+1))) && $LongData26>=($LongMin+($DotPlusLong*$z)) && $LongData26<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox26[$y][$z]++;
				}
			}
		}
	}
	$dbKontur26->close();
}

//------------------------------TANGGAL 27------------------------------
class MyDBKontur27 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."27";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur27 = new MyDBKontur27();
   $sqlKontur27 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur27 = $dbKontur27->query($sqlKontur27);
if(empty($retKontur27))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox27[$y][$z]=0; } }
	$dbKontur27->close();
}
else
{
 	while($rowKontur27 = $retKontur27->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData27	= $rowKontur27['latitude'];
		$LongData27	= $rowKontur27['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData27<=($LatMin-($DotPlusLat*$y)) && $LatData27>=($LatMin-($DotPlusLat*($y+1))) && $LongData27>=($LongMin+($DotPlusLong*$z)) && $LongData27<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox27[$y][$z]++;
				}
			}
		}
	}
	$dbKontur27->close();
}

//------------------------------TANGGAL 28------------------------------
class MyDBKontur28 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."28";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur28 = new MyDBKontur28();
   $sqlKontur28 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur28 = $dbKontur28->query($sqlKontur28);
if(empty($retKontur28))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox28[$y][$z]=0; } }
	$dbKontur28->close();
}
else
{
 	while($rowKontur28 = $retKontur28->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData28	= $rowKontur28['latitude'];
		$LongData28	= $rowKontur28['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData28<=($LatMin-($DotPlusLat*$y)) && $LatData28>=($LatMin-($DotPlusLat*($y+1))) && $LongData28>=($LongMin+($DotPlusLong*$z)) && $LongData28<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox28[$y][$z]++;
				}
			}
		}
	}
	$dbKontur28->close();
}

//------------------------------TANGGAL 29------------------------------
class MyDBKontur29 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."29";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur29 = new MyDBKontur29();
   $sqlKontur29 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur29 = $dbKontur29->query($sqlKontur29);
if(empty($retKontur29))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox29[$y][$z]=0; } }
	$dbKontur29->close();
}
else
{
 	while($rowKontur29 = $retKontur29->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData29	= $rowKontur29['latitude'];
		$LongData29	= $rowKontur29['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData29<=($LatMin-($DotPlusLat*$y)) && $LatData29>=($LatMin-($DotPlusLat*($y+1))) && $LongData29>=($LongMin+($DotPlusLong*$z)) && $LongData29<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox29[$y][$z]++;
				}
			}
		}
	}
	$dbKontur29->close();
}

//------------------------------TANGGAL 30------------------------------
class MyDBKontur30 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."30";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur30 = new MyDBKontur30();
   $sqlKontur30 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur30 = $dbKontur30->query($sqlKontur30);
if(empty($retKontur30))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox30[$y][$z]=0; } }
	$dbKontur30->close();
}
else
{
 	while($rowKontur30 = $retKontur30->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData30	= $rowKontur30['latitude'];
		$LongData30	= $rowKontur30['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData30<=($LatMin-($DotPlusLat*$y)) && $LatData30>=($LatMin-($DotPlusLat*($y+1))) && $LongData30>=($LongMin+($DotPlusLong*$z)) && $LongData30<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox30[$y][$z]++;
				}
			}
		}
	}
	$dbKontur30->close();
}

//------------------------------TANGGAL 31------------------------------
class MyDBKontur31 extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNGrid']."".$_POST['BLNGrid']."31";
         $this->open('C:\Users\Sanglah_Petir\AppData\Local\Astrogenic Systems\SVueNGX\db\\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   	$dbKontur31 = new MyDBKontur31();
   $sqlKontur31 =<<<EOF
      SELECT * from NGXLIGHTNING where type <= 1 and latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $retKontur31 = $dbKontur31->query($sqlKontur31);
if(empty($retKontur31))
{
	for($y=0; $y<$KolomGrid; $y++)
	{ for($z=0; $z<$BarisGrid; $z++) { $ValueBox31[$y][$z]=0; } }
	$dbKontur31->close();
}
else
{
 	while($rowKontur31 = $retKontur31->fetchArray(SQLITE3_ASSOC) )
 	{		
		$LatData31	= $rowKontur31['latitude'];
		$LongData31	= $rowKontur31['longitude'];
		
		for($y=0; $y<$KolomGrid; $y++)
		{
			for($z=0; $z<$BarisGrid; $z++)
			{
				if($LatData31<=($LatMin-($DotPlusLat*$y)) && $LatData31>=($LatMin-($DotPlusLat*($y+1))) && $LongData31>=($LongMin+($DotPlusLong*$z)) && $LongData31<=($LongMin+($DotPlusLong*($z+1))))
				{
					$ValueBox31[$y][$z]++;
				}
			}
		}
	}
	$dbKontur31->close();
}

for($y=0; $y<$KolomGrid; $y++)
{
	for($z=0; $z<$BarisGrid; $z++)
	{
		$ValueBox[$y][$z] =
			$ValueBox01[$y][$z] + $ValueBox02[$y][$z] + $ValueBox03[$y][$z] + $ValueBox04[$y][$z] + $ValueBox05[$y][$z] + $ValueBox06[$y][$z] + $ValueBox07[$y][$z] + $ValueBox08[$y][$z] + $ValueBox09[$y][$z] + $ValueBox10[$y][$z] + $ValueBox11[$y][$z] + $ValueBox12[$y][$z] + $ValueBox13[$y][$z] + $ValueBox14[$y][$z] + $ValueBox15[$y][$z] + $ValueBox16[$y][$z] + $ValueBox17[$y][$z] + $ValueBox18[$y][$z] + $ValueBox19[$y][$z] + $ValueBox20[$y][$z] + $ValueBox21[$y][$z] + $ValueBox22[$y][$z] + $ValueBox23[$y][$z] + $ValueBox24[$y][$z] + $ValueBox25[$y][$z] + $ValueBox26[$y][$z] + $ValueBox27[$y][$z] + $ValueBox28[$y][$z] + $ValueBox29[$y][$z] + $ValueBox30[$y][$z] + $ValueBox31[$y][$z];
	}
}
?>