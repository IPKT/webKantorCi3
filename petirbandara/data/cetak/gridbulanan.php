<title>Stasiun Sanglah Denpasar</title>
<link href="../../img/favicon.ico" type="icon/x-image" rel="shortcut icon" />
<script src="../../bootstrap/js/jquery.min.js" type="text/javascript"></script>
<style type="text/css">
	${demo.css}
	*{
		font-family:Times New Roman;
		font-size:10px;
	}
	@media print {
    footer {page-break-after: always;}
}
</style>
<script src="../../bootstrap/js/highcharts.js"></script>
<script src="../../bootstrap/js/data.js"></script>
<script src="../../bootstrap/js/drilldown.js"></script>
<?php
	include "selectionGridBulanan.php";
	include "selectionKonturBulanan.php";
	$log = $_POST['Log'];
	$bulan = array(
                '01' => 'JANUARI',
                '02' => 'FEBRUARI',
                '03' => 'MARET',
                '04' => 'APRIL',
                '05' => 'MEI',
                '06' => 'JUNI',
                '07' => 'JULI',
                '08' => 'AGUSTUS',
                '09' => 'SEPTEMBER',
                '10' => 'OKTOBER',
                '11' => 'NOVEMBER',
                '12' => 'DESEMBER',
        );
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
		text: 'Bulan <?php echo ucfirst(strtolower($bulan[$_POST['BLNGrid']])); ?>'
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

<?php
	if($log=="isi")
	{
		$JumBox = ceil(($KolomGrid*$BarisGrid)/70);
		for($Side=0; $Side<$JumBox; $Side++)
		{
			include "kop.html";
?>
			<br><br><center><b>Log Grid Sambaran Petir Tanggal <?php echo $_POST['TGLGrid']."-".$_POST['BLNGrid']."-".$_POST['THNGrid']; ?> di wilayah Bali.<br> Grid : <?php echo $KolomGrid*$BarisGrid; ?> (<?php echo $KolomGrid; ?> Kolom x <?php echo $BarisGrid; ?> Baris)<b><br><br>
<?php
			echo "<table border='0' width='715px'>";
				echo "<tr>";
					echo "<td valign='top' width='50%'>";
?>
					<table border="1" cellpadding="5px" style="border-collapse:collapse;" width="350px">
						<tr>
							<td align="center">No</td>
							<td align="center" width="100px">Latitude</td>
							<td align="center" width="100px">Longitude</td>
							<td align="center" width="100px">Sambaran</td>
						</tr>
						<?php
						if($zNext2>=$BarisGrid)
						{ $yNext2++; $zNext2=0; }
						$no = 1+($Side*70);
						for($y=0; $y<$KolomGrid; $y++)
						{
							$y+=$yNext2;
							for($z=0; $z<$BarisGrid; $z++)
							{
								$z+=$zNext2;
								$LatData	= number_format($LatMin-(($DotPlusLat*($y+($y+1))/2)), 5);
								$LongData	= number_format($LongMin+(($DotPlusLong*($z+($z+1))/2)), 5);
								echo "<tr class='tr'>
									<td class='td' width='27px' align='right'>".$no."</td>
									<td class='td' width='52px' align='right'>".$LatData."</td>
									<td class='td' width='52px' align='right'>".$LongData."</td>
									<td style='padding-left:5px;' align='right'>".$ValueBox[$y][$z]."</td>
								</tr>";
								$no++;
								$yNext = $y; $zNext = $z+1;
								if($no==(($Side+($Side+1))*35)+1)
								{ $y = $KolomGrid; $z = $BarisGrid; }
								$zNext2=0;
							}
							$yNext2=0;
						}
						?>
					</table>
<?php
					echo "</td>";
			if($zNext<$BarisGrid)
			{
					echo "<td valign='top'>";
?>
					<table border="1" cellpadding="5px" style="border-collapse:collapse;" width="350px">
						<tr>
							<td align="center">No</td>
							<td align="center" width="100px">Latitude</td>
							<td align="center" width="100px">Longitude</td>
							<td align="center" width="100px">Sambaran</td>
						</tr>
						<?php
						$no = 36+($Side*70);
						for($y=0; $y<$KolomGrid; $y++)
						{
							$y+=$yNext;
							for($z=0; $z<$BarisGrid; $z++)
							{
								$z+=$zNext;
								$LatData	= number_format($LatMin-(($DotPlusLat*($y+($y+1))/2)), 5);
								$LongData	= number_format($LongMin+(($DotPlusLong*($z+($z+1))/2)), 5);
								echo "<tr class='tr'>
									<td class='td' width='27px' align='right'>".$no."</td>
									<td class='td' width='52px' align='right'>".$LatData."</td>
									<td class='td' width='52px' align='right'>".$LongData."</td>
									<td style='padding-left:5px;' align='right'>".$ValueBox[$y][$z]."</td>
								</tr>";
								$no++;
								$yNext2 = $y; $zNext2 = $z+1;
								if($no==(($Side+1)*70)+1)
								{ $y = $KolomGrid; $z = $BarisGrid; }
								$zNext=0;
							}
							$yNext=0;
						}
						?>
					</table>
<?php
					echo "</td>";
			} else
			{
				echo "<td width='50%'>";
				echo "</td>";
			}
				echo "</tr>";
			echo "</table>";
			echo "<br></center><footer></footer>";
		}
	}
	
	if($_SESSION['Statuspengguna']=="Admin")
	{				
		include "kop.html";
	}
?>

<br><br>
<table align="center" border="0" width="40%">
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
    	<td valign="top">
            <table border="0" cellpadding="10px" style="border-collapse:collapse;" width="180">
                <tr style="border:1px solid black;">
                    <td>Bulan</td>
                    <td>: <?php echo $bulan[$_POST['BLNGrid']]."-".$_POST['THNGrid']; ?></td>
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
        <td valign="top">
            <div id="container" style="min-width:380px; height:230px; max-width:500px; margin: 0 auto"></div>
        </td>
	</tr>
	<tr>
		<td align="center" colspan="2">
        	<div id="peta" style="width:500px; height:410px;"></div>
            Gambar 1.Peta sebaran sambaran petir pada Bulan <?php echo $_POST['BLNGrid']."-".$_POST['THNGrid']; ?> di wilayah Bali.
        </td>
	</tr>
</table><br><br><footer></footer>
				
<?php
	if($_SESSION['Statuspengguna']=="Admin")
	{				
		include "kop.html";
	}
?>

<br><br>
<table align="center" border="0" width="40%">
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
		<td align="center" colspan="2">
        	<div id="peta2" style="width:500px; height:410px;"></div>
            Gambar 2.Peta kontur sebaran sambaran petir pada Bulan <?php echo $_POST['BLNGrid']."-".$_POST['THNGrid']; ?> di wilayah Bali.
        </td>
	</tr>
<?php

	if($_SESSION['Statuspengguna']=="Admin")
	{
?>
    <tr>
    	<td colspan="2"><br><br>
			<table border="0" style="padding-top:10px; padding-left:20px; float:left;">
                	<tr>
                        <td align="center">
                            Mengetahui,<br>
                            Kepala Seksi Observasi dan Informasi<br />
                            Stasiun Geofisika Sanglah Denpasar<br /><br /><br /><br />
                            <u>
                                SRI WINARTI, SP.
                            </u><br />
                            NIP. 196105301984032001
                        </td>
                    </tr>
                </table>
                <table border="0" style="padding-top:10px; padding-right:20px; float:right;">
                  	<tr>
                       	<td align="center">
	Denpasar, <?php echo gmdate('d')."-".ucfirst(strtolower($bulan[gmdate('m')]))."-".gmdate('Y'); ?><br>
                            Pembuat Laporan,<br /><br /><br /><br /><br />
                            <u>
                            	<?php
                                	$nama=$mysqli->query("SELECT * FROM tb_pengguna WHERE NIP='$_SESSION[NIP]'");
									$datanama=mysqli_fetch_array($nama);
										echo $dbdatanama=$datanama['Nama'];
								?>
                            </u><br />
                            NIP. <?php echo $_SESSION['NIP']; ?>
                		</td>
                	</tr>
                </table>
		</td>
	</tr>
<?php
	}
?>
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
function MyLogoControl3(controlDiv3) {
    controlDiv3.style.padding = '5px';
    var logo3 = document.createElement('IMG');
	logo3.style.width = '120px';
    logo3.src = '../../img/keterangan.png';
    controlDiv3.appendChild(logo3);

	google.maps.event.addDomListener(logo3);
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
	
	var logoControlDiv3 = document.createElement('DIV3');
	var logoControl3 = new MyLogoControl3(logoControlDiv3);
	logoControlDiv3.index = 0; // used for ordering
	map2.controls[google.maps.ControlPosition.BOTTOM_LEFT].push(logoControlDiv3);
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
				  fillOpacity: 0.5,
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
				  fillOpacity: 0.5,
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
				  fillOpacity: 0.5,
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