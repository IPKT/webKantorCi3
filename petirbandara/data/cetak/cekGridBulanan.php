<title>Stasiun Sanglah Denpasar</title>
<link href="../../img/favicon.ico" type="icon/x-image" rel="shortcut icon" />
<script src="../../bootstrap/js/jquery.min.js" type="text/javascript"></script>
<meta http-equiv="Keep-Alive:timeout=60000" content="60000" />
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
	$TGL = $_POST['BLNGrid']."/".$_POST['THNGrid'];
	include "selectionGridBulanan.php";
	include "selectionKonturBulanan.php";
?>

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
            text: 'Bulan <?php echo $TGL; ?>'
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
                y: <?php echo $totalStrike; ?>
            }, {
                name: 'Strong<br>Strike',
                y: <?php echo $totalStrongStrike; ?>
            }, {
                name: 'CG+',
                y: <?php echo $totalCGPlus; ?>
            }, {
                name: 'CG-',
                y: <?php echo $totalCGMin; ?>
            }, {
                name: 'IC',
                y: <?php echo $totalIC; ?>
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
        <td valign="top" align="center" bgcolor="#FFFF00" style='padding:5px;' colspan="3">
			<font size="+2">Rekapitulasi Sambaran Petir Pada Bulan <?php echo $_POST['BLNGrid']."-".$_POST['THNGrid']; ?></font>
        </td>
	</tr>
	<tr>
    	<td valign="top" style='padding:5px;'>
            <table border="0" cellpadding="10px" style="border-collapse:collapse;" width="225">
                <tr style="border:1px solid black;">
                    <td>Bulan</td>
                    <td>: <?php echo $TGL; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Strike</td>
                    <td>: <?php echo $totalStrike; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Strong Strike</td>
                    <td>: <?php echo $totalStrongStrike; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>CG +</td>
                    <td>: <?php echo $totalCGPlus; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>CG -</td>
                    <td>: <?php echo $totalCGMin; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>IC</td>
                    <td>: <?php echo $totalIC; ?></td>
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
									$LatData	= number_format($LatMin-(($DotPlusLat*($y+($y+1))/2)), 5);
									$LongData	= number_format($LongMin+(($DotPlusLong*($z+($z+1))/2)), 5);
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
		<td valign="top" align="center" height="350px" colspan="2"><hr>
			<div id="container" style="min-width:600px; height:300px; max-width:500px; margin: 0 auto"></div>
        </td>
	</tr>
	<tr>
    	<td valign="top" align="center" bgcolor="#FFFF00" style='padding:5px;' colspan="2">
			<font size="+2">Grid Map Sambaran Petir Pada Bulan <?php echo $_POST['BLNGrid']."-".$_POST['THNGrid']; ?><br>
			Kolom x Baris : <?php echo $_POST['Grid']." x ".$_POST['Grid']; ?></font>
		</td>
		<td valign="top" align="center" bgcolor="#FFFF00" style='padding:5px;' colspan="2">
			<font size="+2">Grid Map Kontur Petir Pada Bulan <?php echo $_POST['BLNGrid']."-".$_POST['THNGrid']; ?><br>
			Kolom x Baris : <?php echo $_POST['Grid']." x ".$_POST['Grid']; ?></font>
		</td>
	</tr>
	<tr>
    	<td valign="top" colspan="2">
			<div id="peta" style="width:600px; height:600px;"></div>
		</td>
		<td valign="top" colspan="2">
			<div id="peta2" style="width:600px; height:600px;"></div>
		</td>
	</tr>
	<tr>
		<form action="gridbulanan.php" method="post" target="_blank">
			<input type="hidden" name="TGLGrid" value="<?php echo $_POST['TGLGrid']; ?>">
            <input type="hidden" name="BLNGrid" value="<?php echo $_POST['BLNGrid']; ?>">
            <input type="hidden" name="THNGrid" value="<?php echo $_POST['THNGrid']; ?>">
			<input type="hidden" name="Grid" value="<?php echo $_POST['Grid']; ?>">
			<input type="hidden" name="LatMin" style="width:100px;" value="<?php echo $_POST['LatMin']; ?>">
			<input type="hidden" name="LatMax" style="width:100px;" value="<?php echo $_POST['LatMax']; ?>">
			<input type="hidden" name="LongMin" style="width:100px;" value="<?php echo $_POST['LongMin']; ?>">
			<input type="hidden" name="LongMax" style="width:100px;" value="<?php echo $_POST['LongMax']; ?>">
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
    var options = {
      zoom: 9,
      center: new google.maps.LatLng(-8.57634, 115.21),
      mapTypeId: google.maps.MapTypeId.TERRAIN,
    };
	var map = new google.maps.Map(document.getElementById('peta'), options);
	var map2 = new google.maps.Map(document.getElementById('peta2'), options);
	
	var logoControlDiv = document.createElement('DIV');
	var logoControl = new MyLogoControl(logoControlDiv);
	logoControlDiv.index = 0; // used for ordering
	map.controls[google.maps.ControlPosition.TOP_RIGHT].push(logoControlDiv);
	
	var logoControlDiv2 = document.createElement('DIV2');
	var logoControl2 = new MyLogoControl2(logoControlDiv2);
	logoControlDiv2.index = 0; // used for ordering
	map.controls[google.maps.ControlPosition.TOP].push(logoControlDiv2);
	
	var locations1 = [
			locationsTGL01,
			locationsTGL02,
			locationsTGL03,
			locationsTGL04,
			locationsTGL05,
			locationsTGL06,
			locationsTGL07,
			locationsTGL08,
			locationsTGL09,
			locationsTGL10,
			locationsTGL11,
			locationsTGL12,
			locationsTGL13,
			locationsTGL14,
			locationsTGL15,
			locationsTGL16,
			locationsTGL17,
			locationsTGL18,
			locationsTGL19,
			locationsTGL20,
			locationsTGL21,
			locationsTGL22,
			locationsTGL23,
			locationsTGL24,
			locationsTGL25,
			locationsTGL26,
			locationsTGL27,
			locationsTGL28,
			locationsTGL29,
			locationsTGL30,
			locationsTGL31
	];
	
	var Kolom	= <?php echo $_POST['Grid'];?>;
	var Baris	= <?php echo $_POST['Grid'];?>;
	var LatMin	= <?php echo $LatMin; ?>;
	var LatMax	= <?php echo $LatMax; ?>;
	var LongMin	= <?php echo $LongMin; ?>;
	var LongMax	= <?php echo $LongMax; ?>;
	var DotPlusLat	= (LatMin-(LatMax)) / Baris;
	var DotPlusLong	= (LongMax-LongMin) / Kolom;
	var LabelBox, y, z;
	var ValueBox = <?php echo json_encode($ValueBox); ?>;
	  
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
        strokeOpacity: 1,
        strokeWeight: 0.2,
        fillOpacity: 1
    });
	  
	var marker1, i, j;
	for (i = 0; i < locations1.length; i++) {
		for (j = 0; j < locations1[i].length; j++) {
			if(locations1[i][j][4]==0)
			{
			marker1 = new google.maps.Marker({
				position: new google.maps.LatLng(locations1[i][j][1], locations1[i][j][2]),
				map: map,
				 icon: 'img/CGPlus.png',
				title: locations1[i][j][3]
			  });
			}
			else if(locations1[i][j][4]==1)
			{
			marker1 = new google.maps.Marker({
				position: new google.maps.LatLng(locations1[i][j][1], locations1[i][j][2]),
				map: map,
				 icon: 'img/CGMin.png',
				title: locations1[i][j][3]
			  });
			}
		}
	}
	
	var logoControlDiv = document.createElement('DIV');
	var logoControl = new MyLogoControl(logoControlDiv);
	logoControlDiv.index = 0; // used for ordering
	map2.controls[google.maps.ControlPosition.TOP_RIGHT].push(logoControlDiv);
	
	for(y=0; y<Kolom; y++)
	{
		for(z=0; z<Baris; z++)
		{
			var LatData		= LatMin-((DotPlusLat*(y+(y+1))/2));
			var LongData	= LongMin+((DotPlusLong*(z+(z+1))/2));
			
			if(ValueBox[y][z] > 12)
			{
				var rectangle = new google.maps.Rectangle({
				  strokeColor: '#000000',
				  strokeOpacity: 0,
				  strokeWeight: 0,
				  fillColor: '#FF0000',
				  fillOpacity: 0.7,
				  map: map2,
				  bounds: {
					north: LatData+(DotPlusLat/2),
					south: LatData-(DotPlusLat/2),
					east: LongData+(DotPlusLong/2),
					west: LongData-(DotPlusLong/2)
				  }
				});
			}
			else if(ValueBox[y][z] > 6)
			{
				var rectangle = new google.maps.Rectangle({
				  strokeColor: '#000000',
				  strokeOpacity: 0,
				  strokeWeight: 0,
				  fillColor: '#FFFF00',
				  fillOpacity: 0.7,
				  map: map2,
				  bounds: {
					north: LatData+(DotPlusLat/2),
					south: LatData-(DotPlusLat/2),
					east: LongData+(DotPlusLong/2),
					west: LongData-(DotPlusLong/2)
				  }
				});
			}
			else if(ValueBox[y][z] > 0)
			{
				var rectangle = new google.maps.Rectangle({
				  strokeColor: '#000000',
				  strokeOpacity: 0,
				  strokeWeight: 0,
				  fillColor: '#02d802',
				  fillOpacity: 0.7,
				  map: map2,
				  bounds: {
					north: LatData+(DotPlusLat/2),
					south: LatData-(DotPlusLat/2),
					east: LongData+(DotPlusLong/2),
					west: LongData-(DotPlusLong/2)
				  }
				});
			}
		}
	}
  };
})();
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAujVXnHNyauK3MxG1MC7yGLjeSGOPCyrw&libraries=visualization&callback=initMap&load=1"></script>
<footer></footer>
	
	