<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAujVXnHNyauK3MxG1MC7yGLjeSGOPCyrw"></script>
	<script type="text/javascript">
	var LatitudeDaerah = <?php echo $FIXLatitude = $Latitude - 0.1; ?>;
	var LongitudeDaerah = <?php echo $Longitude; ?>;
	
function MyLogoControl(controlDiv) {
    controlDiv.style.padding = '10px';
    var logo = document.createElement('IMG');
	logo.style.width = '50px';
    logo.src = '../../img/logo2.png';
    controlDiv.appendChild(logo);

    google.maps.event.addDomListener(logo);
}

function MyLogoControl2(controlDiv2) {
    controlDiv2.style.padding = '10px';
    var logo2 = document.createElement('IMG');
	logo2.style.width = '50px';
    logo2.src = '../../img/Des.jpg';
    controlDiv2.appendChild(logo2);

	google.maps.event.addDomListener(logo2);
}
	
	(function() {
  window.onload = function() {
	  <?php
   class MyDBmap3 extends SQLite3
   {
      function __construct()
      {
		 include "../connection.php";
		 $cekTGL=$mysqli->query("SELECT * FROM tb_pemohon WHERE IDPemohon='$_GET[id]'");
		 $tampungcekTGL=mysqli_fetch_array($cekTGL);
		 	$TGL = $tampungcekTGL['TGLPemohon'];
		 	$BLN = $tampungcekTGL['BLNPemohon'];
			$THN = $tampungcekTGL['THNPemohon'];
			$Tanggal = $THN."".$BLN."".$TGL;
         $this->open('C:\xampp\htdocs\petir\data\db\NGXDS_'.$Tanggal.'.db3');
      }
   }
	  
    $FIXLatitudeAtas = $Latitude + 0.1;
	$FIXLongitudeKiri = $Longitude - 0.1;
	$FIXLatitudeBawah = $Latitude - 0.1;
	$FIXLongitudeKanan = $Longitude + 0.1;
   
   	$dbmap3 = new MyDBmap3();
   $sqlmap3 =<<<EOF
      SELECT * FROM NGXLIGHTNING WHERE latitude<=$FIXLatitudeAtas AND longitude>=$FIXLongitudeKiri AND latitude>=$FIXLatitudeBawah AND longitude<=$FIXLongitudeKanan;
EOF;

   $retmap3 = $dbmap3->query($sqlmap3);
if(!empty($retmap3))
{
	$rowmap3awal = $retmap3->fetchArray(SQLITE3_ASSOC);
		if($rowmap3awal['type']==0 || $rowmap3awal['type']==1)
		{
			$DBJAMawal = $rowmap3awal['datetime_utc'];
			$JAMawal = explode(" ", $DBJAMawal);
			$DJAMawal = explode(":", $JAMawal[1]);
		}
		
	while($rowmap3akhir = $retmap3->fetchArray(SQLITE3_ASSOC))
   	{
		if($rowmap3akhir['type']==0 || $rowmap3akhir['type']==1)
		{
			$DBJAMakhir = $rowmap3akhir['datetime_utc'];
			$JAMakhir = explode(" ", $DBJAMakhir);
			$DJAMakhir = explode(":", $JAMakhir[1]);
		}
	}
	
	$dbmap3->close();
}
	$cekUTCtoWITAawal = $DJAMawal[0] + 8;
	if($cekUTCtoWITAawal < 0)
	{ $tmpUTCtoWITAawal = $cekUTCtoWITAawal + 24; }
	elseif($cekUTCtoWITAawal == 0)
	{ $tmpUTCtoWITAawal = "00"; }
	elseif($cekUTCtoWITAawal > 24)
	{ $tmpUTCtoWITAawal = $cekUTCtoWITAawal - 24; }
	elseif($cekUTCtoWITAawal == 24)
	{ $tmpUTCtoWITAawal = "00"; }
	else
	{ $tmpUTCtoWITAawal = $cekUTCtoWITAawal; }
	
	if($tmpUTCtoWITAawal < 10)
	{ $UTCtoWITAawal = "0".$tmpUTCtoWITAawal; }
	else
	{ $UTCtoWITAawal = $tmpUTCtoWITAawal; }


	$cekUTCtoWITAakhir = $DJAMakhir[0] + 8;
	if($cekUTCtoWITAakhir < 0)
	{ $tmpUTCtoWITAakhir = $cekUTCtoWITAakhir + 24; }
	elseif($cekUTCtoWITAakhir == 0)
	{ $tmpUTCtoWITAakhir = "00"; }
	elseif($cekUTCtoWITAakhir > 24)
	{ $tmpUTCtoWITAakhir = $cekUTCtoWITAakhir - 24; }
	elseif($cekUTCtoWITAakhir == 24)
	{ $tmpUTCtoWITAakhir = "00"; }
	else
	{ $tmpUTCtoWITAakhir = $cekUTCtoWITAakhir; }
	
	if($tmpUTCtoWITAakhir < 10)
	{ $UTCtoWITAakhir = "0".$tmpUTCtoWITAakhir; }
	else
	{ $UTCtoWITAakhir = $tmpUTCtoWITAakhir; }
?>
	  
<!-------------------MAP 1------------------->
	var map;
    var locations1 = [
	[0, LatitudeDaerah, LongitudeDaerah],
	<?php
   class MyDBmap1 extends SQLite3
   {
      function __construct()
      {
		 include "../connection.php";
		 $cekTGL=$mysqli->query("SELECT * FROM tb_pemohon WHERE IDPemohon='$_GET[id]'");
		 $tampungcekTGL=mysqli_fetch_array($cekTGL);
		 	$TGL = $tampungcekTGL['TGLPemohon'];
		 	$BLN = $tampungcekTGL['BLNPemohon'];
			$THN = $tampungcekTGL['THNPemohon'];
			$Tanggal = $THN."".$BLN."".$TGL;
         $this->open('C:\xampp\htdocs\petir\data\db\NGXDS_'.$Tanggal.'.db3');
      }
   }
   	$dbmap1 = new MyDBmap1();
   $sqlmap1 =<<<EOF
      SELECT * from NGXLIGHTNING;
EOF;

   $retmap1 = $dbmap1->query($sqlmap1);
if(!empty($retmap1))
{
	while($rowmap1 = $retmap1->fetchArray(SQLITE3_ASSOC) )
   	{
		$DBJAMpetir1 = $rowmap1['datetime_utc'];
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
			
			$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA. Lat: ".$rowmap1['latitude'].", Long: ".$rowmap1['longitude'];
		
		?>
		[<?php echo $rowmap1['id'];?>, <?php echo $rowmap1['latitude'];?>, <?php echo $rowmap1['longitude'];?>, '<?php echo $JAMsambaran1;?>', <?php echo $rowmap1['type'];?>],
		<?php
	}
	
	$dbmap1->close();
}
   	?>
    ];
	var CGmap1 = [
<?php
   class MyDBmapCG1 extends SQLite3
   {
      function __construct()
      {
		 include "../connection.php";
		 $cekTGL=$mysqli->query("SELECT * FROM tb_pemohon WHERE IDPemohon='$_GET[id]'");
		 $tampungcekTGL=mysqli_fetch_array($cekTGL);
		 	$TGL = $tampungcekTGL['TGLPemohon'];
		 	$BLN = $tampungcekTGL['BLNPemohon'];
			$THN = $tampungcekTGL['THNPemohon'];
			$Tanggal = $THN."".$BLN."".$TGL;
         $this->open('C:\xampp\htdocs\petir\data\db\NGXDS_'.$Tanggal.'.db3');
      }
   }
   	$dbmapCG1 = new MyDBmapCG1();
   $sqlmapCG1 =<<<EOF
      SELECT * from NGXLIGHTNING;
EOF;

   $retmapCG1 = $dbmapCG1->query($sqlmapCG1);
if(!empty($retmapCG1))
{
	while($rowmapCG1 = $retmapCG1->fetchArray(SQLITE3_ASSOC) )
   	{
		?>
		['<?php echo $rowmapCG1['type'];?>'],
		<?php
	}
	
	$dbmapCG1->close();
}
?>
	];

<!-------------------MAP 2------------------->
	var map;
    var locations2 = [
	[0, LatitudeDaerah, LongitudeDaerah],
	<?php
   class MyDBmap2 extends SQLite3
   {
      function __construct()
      {
		 include "../connection.php";
		 $cekTGL=$mysqli->query("SELECT * FROM tb_pemohon WHERE IDPemohon='$_GET[id]'");
		 $tampungcekTGL=mysqli_fetch_array($cekTGL);
		 	$TGL = $tampungcekTGL['TGLPemohon'];
		 	$BLN = $tampungcekTGL['BLNPemohon'];
			$THN = $tampungcekTGL['THNPemohon'];
			$Tanggal = $THN."".$BLN."".$TGL;
         $this->open('C:\xampp\htdocs\petir\data\db\NGXDS_'.$Tanggal.'.db3');
      }
   }
   
   	$FIXLatitudeAtas = $Latitude + 0.1;
	$FIXLongitudeKiri = $Longitude - 0.1;
	$FIXLatitudeBawah = $Latitude - 0.1;
	$FIXLongitudeKanan = $Longitude + 0.1;
   
   	$dbmap2 = new MyDBmap2();
   $sqlmap2 =<<<EOF
      SELECT * FROM NGXLIGHTNING WHERE latitude<=$FIXLatitudeAtas AND longitude>=$FIXLongitudeKiri AND latitude>=$FIXLatitudeBawah AND longitude<=$FIXLongitudeKanan;
EOF;

   $retmap2 = $dbmap2->query($sqlmap2);
if(!empty($retmap2))
{
	$Petir = "terjadi";
	while($rowmap2 = $retmap2->fetchArray(SQLITE3_ASSOC) )
   	{
		if($rowmap2['type']==0 || $rowmap2['type']==1)
		{
			$DBJAMpetir2 = $rowmap2['datetime_utc'];
			$JAMpetir2 = explode(" ", $DBJAMpetir2);
			$DJAMpetir2 = explode(":", $JAMpetir2[1]);

				$cekUTCtoWITApetir2 = $DJAMpetir2[0] + 8;
				if($cekUTCtoWITApetir2 < 0)
				{ $tmpUTCtoWITApetir2 = $cekUTCtoWITApetir2 + 24; }
				elseif($cekUTCtoWITApetir2 == 0)
				{ $tmpUTCtoWITApetir2 = "00"; }
				elseif($cekUTCtoWITApetir2 > 24)
				{ $tmpUTCtoWITApetir2 = $cekUTCtoWITApetir2 - 24; }
				elseif($cekUTCtoWITApetir2 == 24)
				{ $tmpUTCtoWITApetir2 = "00"; }
				else
				{ $tmpUTCtoWITApetir2 = $cekUTCtoWITApetir2; }

				if($tmpUTCtoWITApetir2 < 10)
				{ $UTCtoWITApetir2 = "0".$tmpUTCtoWITApetir2; }
				else
				{ $UTCtoWITApetir2 = $tmpUTCtoWITApetir2; }

				$JAMsambaran2 = "PUKUL : ".$UTCtoWITApetir2.".".$DJAMpetir2[1]." WITA. Lat: ".$rowmap2['latitude'].", Long: ".$rowmap2['longitude'];
		
			?>
			[<?php echo $rowmap2['id'];?>, <?php echo $rowmap2['latitude'];?>, <?php echo $rowmap2['longitude'];?>, '<?php echo $JAMsambaran2;?>', <?php echo $rowmap2['type'];?>],
			<?php
		}
	}
	$dbmap2->close();
}
else
{
	$Petir = "tidak terjadi";
}
   	?>
    ];  
	var CGmap2 = [
<?php
   class MyDBmapCG2 extends SQLite3
   {
      function __construct()
      {
		 include "../connection.php";
		 $cekTGL=$mysqli->query("SELECT * FROM tb_pemohon WHERE IDPemohon='$_GET[id]'");
		 $tampungcekTGL=mysqli_fetch_array($cekTGL);
		 	$TGL = $tampungcekTGL['TGLPemohon'];
		 	$BLN = $tampungcekTGL['BLNPemohon'];
			$THN = $tampungcekTGL['THNPemohon'];
			$Tanggal = $THN."".$BLN."".$TGL;
         $this->open('C:\xampp\htdocs\petir\data\db\NGXDS_'.$Tanggal.'.db3');
      }
   }

	$FIXLatitudeAtas = $Latitude + 0.1;
	$FIXLongitudeKiri = $Longitude - 0.1;
	$FIXLatitudeBawah = $Latitude - 0.1;
	$FIXLongitudeKanan = $Longitude + 0.1;

   	$dbmapCG2 = new MyDBmapCG2();
   $sqlmapCG2 =<<<EOF
     SELECT * FROM NGXLIGHTNING WHERE latitude<=$FIXLatitudeAtas AND longitude>=$FIXLongitudeKiri AND latitude>=$FIXLatitudeBawah AND longitude<=$FIXLongitudeKanan;
EOF;

   $retmapCG2 = $dbmapCG2->query($sqlmapCG2);
if(!empty($retmapCG2))
{
	while($rowmapCG2 = $retmapCG2->fetchArray(SQLITE3_ASSOC) )
   	{
		$DBLatitude = $rowmapCG2['latitude'];
		$DBLongitude = $rowmapCG2['longitude'];
		if($rowmapCG2['type']==0 || $rowmapCG2['type']==1)
		{
			$DBType = $rowmapCG2['type'];
			?>
			['<?php echo $DBType; ?>'],
			<?php
		}
	}
		
	$dbmapCG2->close();
}
?>
	];


    //Parameter Google maps
    var options = {
      zoom: 9,
      center: new google.maps.LatLng(-8.340583, 115.092016),
      mapTypeId: google.maps.MapTypeId.HYBRID,
    };
	
	var map = new google.maps.Map(document.getElementById('peta'), options);
	
	var logoControlDiv = document.createElement('DIV');
	var logoControl = new MyLogoControl(logoControlDiv);
	logoControlDiv.index = 0; // used for ordering
	map.controls[google.maps.ControlPosition.TOP_RIGHT].push(logoControlDiv);
	
	var logoControlDiv2 = document.createElement('DIV2');
	var logoControl2 = new MyLogoControl2(logoControlDiv2);
	logoControlDiv2.index = 0; // used for ordering
	map.controls[google.maps.ControlPosition.TOP].push(logoControlDiv2);
	
	var marker1, i;
    for (i = 0; i <= locations1.length; i++) { 
		if(i == 0)
		{
			  marker1 = new google.maps.Marker({
				position: new google.maps.LatLng(locations1[i][1], locations1[i][2]),
				map: map,
				 icon: 'img/Lingkaran.png'
			  });
		}
		else
		{
			if(CGmap1[i-1]==0)
			{
			marker1 = new google.maps.Marker({
				position: new google.maps.LatLng(locations1[i][1], locations1[i][2]),
				map: map,
				 icon: 'img/CGPlus.png',
				title: locations1[i][3]
			  });
			}
			else if(CGmap1[i-1]==1)
			{
			marker1 = new google.maps.Marker({
				position: new google.maps.LatLng(locations1[i][1], locations1[i][2]),
				map: map,
				 icon: 'img/CGMin.png',
				title: locations1[i][3]
			  });
			}
		}
    }
	
    var map2 = new google.maps.Map(document.getElementById('peta2'), options);
	
	var logoControlDiv = document.createElement('DIV');
	var logoControl = new MyLogoControl(logoControlDiv);
	logoControlDiv.index = 0; // used for ordering
	map2.controls[google.maps.ControlPosition.TOP_RIGHT].push(logoControlDiv);
	
	var logoControlDiv2 = document.createElement('DIV2');
	var logoControl2 = new MyLogoControl2(logoControlDiv2);
	logoControlDiv2.index = 0; // used for ordering
	map2.controls[google.maps.ControlPosition.TOP].push(logoControlDiv2);
	
    var marker2, j;
    for (j = 0; j <= locations2.length; j++) { 
		if(j == 0)
		{
			  marker2 = new google.maps.Marker({
				position: new google.maps.LatLng(locations2[j][1], locations2[j][2]),
				map: map2,
				 icon: 'img/Lingkaran.png'
			  });
		}
		else
		{
			if(CGmap2[j-1]==0)
			{
			marker2 = new google.maps.Marker({
				position: new google.maps.LatLng(locations2[j][1], locations2[j][2]),
				map: map2,
				 icon: 'img/CGPlus.png',
				title: locations2[j][3]
			  });
			  
			}
			else if(CGmap2[j-1]==1)
			{
			marker2 = new google.maps.Marker({
				position: new google.maps.LatLng(locations2[j][1], locations2[j][2]),
				map: map2,
				 icon: 'img/CGMin.png',
				title: locations2[j][3]
			  });
			}
		}
    }

  };
})();
	</script>