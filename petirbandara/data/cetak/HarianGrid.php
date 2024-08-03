<title>Stasiun Sanglah Denpasar</title>
<link href="../../img/favicon.ico" type="icon/x-image" rel="shortcut icon" />
<script src="../../bootstrap/js/jquery.min.js" type="text/javascript"></script>
<style type="text/css">
	.div {
		width: 364px;
		height: 180px;
		border: thin solid black;
		overflow-x: hidden;
		overflow-y: auto;
	}
	.table {
		border-collapse: collapse;
		border-spacing: 0;
		width: 100%;
		border: 1px solid #ddd;
	}

	.td {
		text-align: center;
		padding: 8px;
	}
	.tr:nth-child(even){background-color: #f2f2f2};
	${demo.css}
	*{
		font-family:arial;
	}
	@media print {
    footer {page-break-after: always;}
}
</style>
<script src="../../bootstrap/js/highcharts.js"></script>
<script src="../../bootstrap/js/data.js"></script>
<script src="../../bootstrap/js/drilldown.js"></script>

<?php
	session_set_cookie_params(0);
	error_reporting(0);
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
         $this->open('C:\xampp\htdocs\petir\data\db\NGXDS_'.$TGL_2.'.db3');
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
	$ArrayBox = 0;
   
   	$db = new MyDB();
   $sql =<<<EOF
      SELECT * from NGXLIGHTNING where latitude <= '$LatMin' and latitude >= '$LatMax' and longitude >= '$LongMin' and longitude <= '$LongMax';
EOF;

   $ret = $db->query($sql);
if(empty($ret))
{
	echo "<center><font color='red'><h2>TIDAK ADA DATA</h2></font></center>";
	$db->close();
}
else
{
 	while($row = $ret->fetchArray(SQLITE3_ASSOC) )
 	{
		$Delta=(sqrt((($row['latitude']-(-8.67694))*($row['latitude']-(-8.67694)))+(($row['longitude']-112.21)*($row['longitude']-112.21))))*111;
	   
		$Strike++;
		
		if($Delta<=25)
		{ $StrongStrike++; }
		
		if($row['type']=="0")
		{ $CGPlus++; }
	   
		elseif($row['type']==1)
		{ $CGMin++; }
	   
		elseif($row['type']==2)
		{ $IC++; }
		
		$LatData	= $row['latitude'];
		$LongData	= $row['longitude'];
		
		if($row['type']==0 || $row['type']==1)
		{
			if($row['latitude'] <= $LatMin && $row['latitude'] >= $LatMax && $row['longitude'] >= $LongMin && $row['longitude'] <= $LongMax)
			{
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

					$JAMsambaran1 = "PUKUL : ".$UTCtoWITApetir1.".".$DJAMpetir1[1]." WITA. Lat: ".$row['latitude'].", Long: ".$row['longitude'];

				$locations1[$ArrayBox] = array($row['id'], $row['latitude'], $row['longitude'], $JAMsambaran1, $row['type']);
				
				$ArrayBox++;
			}
			
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
	}
	$db->close();
?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAujVXnHNyauK3MxG1MC7yGLjeSGOPCyrw&libraries=visualization"></script>
<script type="text/javascript" src="../../bootstrap/js/markerclusterer.js"></script>
<script type="text/javascript">
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
	  
<!-------------------MAP 1------------------->
	var locations1 = <?php echo json_encode($locations1); ?>;
	  
    //Parameter Google maps
    var options = {
      zoom: 8,
      center: new google.maps.LatLng(-8.67634, 115.21),
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
	
	var Kolom	= <?php echo $_POST['Grid'];?>;
	var Baris	= <?php echo $_POST['Grid'];?>;
	var LatMin	= <?php echo $LatMin; ?>;
	var LatMax	= <?php echo $LatMax; ?>;
	var LongMin	= <?php echo $LongMin; ?>;
	var LongMax	= <?php echo $LongMax; ?>;
	var DotPlusLat	= (LatMin-(LatMax)) / Baris;
	var DotPlusLong	= (LongMax-LongMin) / Kolom;
	var LabelBox, y, z;
	
	/*for(y=0; y<Kolom; y++)
	{
		for(z=0; z<Baris; z++)
		{
			var LatData		= LatMin-((DotPlusLat*(y+(y+1))/2));
			var LongData	= LongMin+((DotPlusLong*(z+(z+1))/2));
			
			LabelBox = new google.maps.Marker({
				position: new google.maps.LatLng(LatData, LongData),
				map: map,
			 	label: {text:y+"."+z, color: "red", fontSize: "12px", fontWeight: "bold"},
				zindex: locations1.length+1,
				icon: {
					path: google.maps.SymbolPath.CIRCLE,
					scale: 0
				}
		  	});
		}
	}*/
	var GridLatLong = [
		<?php		
		for($i=0;$i<=$BarisGrid;$i++)
		{
			$DotLat = $LatMin - ($DotPlusLat * $i);
			for($j=0;$j<=$KolomGrid;$j++)
			{
				$DotLong = $LongMin + ($DotPlusLong * $j);
				?> {lat: <?php echo $DotLat; ?>, lng: <?php echo $DotLong; ?>}, <?php
			}
			?> {lat: <?php echo $DotLat; ?>, lng: <?php echo $LongMin; ?>}, <?php
		}
		for($l=0;$l<=$KolomGrid;$l++)
		{
			$DotLong = $LongMin + ($DotPlusLong * $l);
			for($k=0;$k<=$BarisGrid;$k++)
			{
				$DotLat = $LatMax + ($DotPlusLat * $k);
				?> {lat: <?php echo $DotLat; ?>, lng: <?php echo $DotLong; ?>}, <?php
			}
			?> {lat: <?php echo $LatMax; ?>, lng: <?php echo $DotLong; ?>}, <?php
		}
		?>
		{lat: <?php echo $LatMax; ?>, lng: <?php echo $LongMin; ?>},
    ];

    var GridMap = new google.maps.Polygon({
    	paths: GridLatLong,
		map: map,
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillOpacity: 0
    });
	  
	var marker1, i;
	for(i = 0; i <= locations1.length; i++) {
		if(locations1[i][4]==0)
		{
		marker1 = new google.maps.Marker({
			position: new google.maps.LatLng(locations1[i][1], locations1[i][2]),
			map: map,
			 icon: 'img/CGPlus.png',
			title: locations1[i][3]
		  });
		}
		else if(locations1[i][4]==1)
		{
		marker1 = new google.maps.Marker({
			position: new google.maps.LatLng(locations1[i][1], locations1[i][2]),
			map: map,
			 icon: 'img/CGMin.png',
			title: locations1[i][3]
		  });
		}
    }
  };
})();
	</script>

<!-----------------------DATA GRAFIK----------------------->
<script type="text/javascript">
$(function () {
    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Rekapitulasi Prosentase Hasil Monitoring Sistem Prosesing Petir'
        },
        subtitle: {
            text: 'Tanggal <?php echo $TGL_1; ?>'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true
                }
            }
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Strike',
                y: <?php echo $Strike; ?>
            }, {
                name: 'Strong<br>Strike',
                y: <?php echo $StrongStrike; ?>
            }, {
                name: 'CG+',
                y: <?php echo $CGPlus; ?>
            }, {
                name: 'CG-',
                y: <?php echo $CGMin; ?>
            }, {
                name: 'IC',
                y: <?php echo $IC; ?>
            }]
        }]
    });
});
</script>
<table align="center" border="0" width="40%" style="border-collapse:collapse;">
<?php
	$isi=$_POST['isi'];
	if(!empty($isi))
	{
    	echo "<tr><td align='center' colspan='2'>
			Tabel ".$_POST['notabel']." Rekapitulasi Prosentase Hasil Monitoring Sistem Prosesing Petir<br><br>
		</td></tr>";
    }
?>
	<tr>
        <td valign="top" align="center" bgcolor="#FFFF00" style='padding:5px;' colspan="2">
			<font size="+2">Rekapitulasi Sambaran Petir Pada Tanggal <?php echo $_POST['TGLGrid']."-".$_POST['BLNGrid']."-".$_POST['THNGrid']; ?></font>
        </td>
    	<td valign="top" align="center" bgcolor="#FFFF00" style='padding:5px;'>
			<font size="+2">Grid Map Sambaran Petir Pada Tanggal <?php echo $_POST['TGLGrid']."-".$_POST['BLNGrid']."-".$_POST['THNGrid']; ?><br>
			Kolom x Baris : <?php echo $_POST['Grid']." x ".$_POST['Grid']; ?></font>
		</td>
	</tr>
	<tr>
    	<td valign="top" style='padding:5px;'>
            <table border="0" cellpadding="10px" style="border-collapse:collapse;" width="225">
                <tr style="border:1px solid black;">
                    <td>Tanggal</td>
                    <td>: <?php echo $TGL_1; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Strike</td>
                    <td>: <?php echo $Strike; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Strong Strike</td>
                    <td>: <?php echo $StrongStrike; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>CG +</td>
                    <td>: <?php echo $CGPlus; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>CG -</td>
                    <td>: <?php echo $CGMin; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>IC</td>
                    <td>: <?php echo $IC; ?></td>
                </tr>
            </table>
            <i>*Data Kosong = Lost Data</i>
        </td>
		<td align="right" valign="top" style='padding-left:5px;padding-top:5px;padding-bottom:5px;'>
			<table border="1" cellpadding="5px" style="border-collapse:collapse;" width="365px" height="100px">
				<tr>
					<td align="center" rowspan="2">&nbsp;&nbsp;No&nbsp;&nbsp;</td>
					<td align="center" colspan="2">Koordinat</td>
					<td align="center" rowspan="2">Log Sambaran</td>
				</tr>
				<tr>
					<td align="center">&nbsp;Latitude&nbsp;</td>
					<td align="center">Longitude</td>
				</tr>
				<tr>
					<td style="padding:0px;" colspan="4">
						<div class="div">
						<table class="table" style="border-collapse:collapse;" border="1">
						<?php
							$no = 1;
							for($y=0; $y<$KolomGrid; $y++)
							{
								for($z=0; $z<$BarisGrid; $z++)
								{
									$LatData	= $LatMin-(($DotPlusLat*($y+($y+1))/2));
									$LongData	= $LongMin+(($DotPlusLong*($z+($z+1))/2));
									echo "<tr class='tr'>
										<td class='td' width='37px'>".$no."</td>
										<td class='td' width='70px'>".$LatData."</td>
										<td class='td' width='75px'>".$LongData."</td>
										<td style='padding-left:5px;'>".$ValueBox[$y][$z]."</td>
									</tr>";
									$no++;
								}
							}
						?>
						</table>
						</div>
					</td>
				</tr>
			</table>
		</td>
    	<td valign="top" rowspan="2">
			<div id="peta" style="width:600px; height:600px;"></div>
		</td>
	</tr>
	<tr>
		<td valign="top" align="center" height="350px" colspan="2"><hr>
			<div id="container" style="min-width:600px; height:300px; max-width:500px; margin: 0 auto"></div>
        </td>
	</tr>
	<tr>
		<form action="gridharian.php" method="post" target="_blank">
			<input type="hidden" name="TGLGrid" value="<?php echo $_POST['TGLGrid']; ?>">
            <input type="hidden" name="BLNGrid" value="<?php echo $_POST['BLNGrid']; ?>">
            <input type="hidden" name="THNGrid" value="<?php echo $_POST['THNGrid']; ?>">
			<input type="hidden" name="KolomGrid" value="<?php echo $_POST['Grid']; ?>">
			<input type="hidden" name="BarisGrid" value="<?php echo $_POST['Grid']; ?>">
			<td align="center" colspan="3" style='padding:5px;'>
				<input type="checkbox" name="Log" value="isi"> Cetak Log Sambaran<br>
				<?php
					echo $Tombol="<input type='submit' class='btn btn-primary btn-lg' style='padding-top:5px; padding-bottom:5px; padding-left:10px; padding-right:10px;' value='CETAK'>";	

					echo $TombolTutup="&nbsp;&nbsp;<button onClick='self.close()' class='btn btn-default btn-lg' style='padding-top:5px; padding-bottom:5px; padding-left:10px; padding-right:10px;'>TUTUP</button>";
				?>
			</td>
		</form>
    </tr>
</table>
<footer></footer>
<?php
}
?>
	
	