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
	session_set_cookie_params(0);
	//error_reporting();
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
	if($_SESSION['Statuspengguna']=="Admin")
	{				
	include "kop.html";
	}
	
	if($_POST['PB_BLN']=="01" || $_POST['PB_BLN']=="1")
		{ $bln="Januari"; }
	elseif($_POST['PB_BLN']=="02" || $_POST['PB_BLN']=="2")
		{ $bln="Februari"; }
	elseif($_POST['PB_BLN']=="03" || $_POST['PB_BLN']=="3")
		{ $bln="Maret"; }
	elseif($_POST['PB_BLN']=="04" || $_POST['PB_BLN']=="4")
		{ $bln="April"; }
	elseif($_POST['PB_BLN']=="05" || $_POST['PB_BLN']=="5")
		{ $bln="Mei"; }
	elseif($_POST['PB_BLN']=="06" || $_POST['PB_BLN']=="6")
		{ $bln="Juni"; }
	elseif($_POST['PB_BLN']=="07" || $_POST['PB_BLN']=="7")
		{ $bln="Juli"; }
	elseif($_POST['PB_BLN']=="08" || $_POST['PB_BLN']=="8")
		{ $bln="Agustus"; }
	elseif($_POST['PB_BLN']=="09" || $_POST['PB_BLN']=="9")
		{ $bln="September"; }
	elseif($_POST['PB_BLN']=="10")
		{ $bln="Oktober"; }
	elseif($_POST['PB_BLN']=="11")
		{ $bln="November"; }
	elseif($_POST['PB_BLN']=="12")
		{ $bln="Desember"; }
	
	$BLN_1 = $bln."/".$_POST['PB_THN'];
?>

<br><br>
<table align="center" border="0" cellpadding="5px" width="600" style="border-collapse:collapse;">
<?php
	$isi=$_POST['isi'];
	if(!empty($isi))
	{
    	echo "<tr><td align='center' colspan='9'>
			Tabel ".$_POST['notabel']." Rekapitulasi Prosentase Hasil Monitoring Sistem Prosesing Petir<br><br>
		</td></tr>";
    }
?>
	<tr style="border:1px solid black;">
        	<td style="border:1px solid black;" align="center" rowspan="3">No</td>
            <td style="border:1px solid black;" align="center" colspan="8">Informasi Kelistrikan Udara Bulan <?php echo $bln." ".$_POST['PB_THN']; ?></td>
        </tr>
        <tr style="border:1px solid black;">
        	<td style="border:1px solid black;" align="center" colspan="3">Hari</td>
            <td style="border:1px solid black;" align="center" rowspan="2">Strike</td>
            <td style="border:1px solid black;" align="center" rowspan="2">Strong<br>Strike</td>
            <td style="border:1px solid black;" align="center" rowspan="2">CG+</td>
            <td style="border:1px solid black;" align="center" rowspan="2">CG-</td>
            <td style="border:1px solid black;" align="center" rowspan="2">IC</td>
        </tr>
        <tr style="border:1px solid black;">
        	<td style="border:1px solid black;" align="center">Tanggal</td>
            <td style="border:1px solid black;" align="center">Bulan</td>
            <td style="border:1px solid black;" align="center">Tahun</td>
        </tr>
   
<?php
	include "selection.php";
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAujVXnHNyauK3MxG1MC7yGLjeSGOPCyrw"></script>
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
		var map;
		var options = {
		  zoom: 9,
		  center: new google.maps.LatLng(-8.440583, 115.092016),
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
		
		var locationsTGL = [
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
		
		var marker1, i, j;
		for (i = 0; i < locationsTGL.length; i++) {
			for (j = 0; j < locationsTGL[i].length; j++) {
				if(locationsTGL[i][j][4]==0)
				{
				marker1 = new google.maps.Marker({
					position: new google.maps.LatLng(locationsTGL[i][j][1], locationsTGL[i][j][2]),
					map: map,
					 icon: 'img/CGPlus.png',
					title: locationsTGL[i][j][3]
				  });
				}
				else if(locationsTGL[i][j][4]==1)
				{
				marker1 = new google.maps.Marker({
					position: new google.maps.LatLng(locationsTGL[i][j][1], locationsTGL[i][j][2]),
					map: map,
					 icon: 'img/CGMin.png',
					title: locationsTGL[i][j][3]
				  });
				}
			}
		}
	};
	})();
</script>
	
	<tr style="border:1px solid black;">
            <td style="border:1px solid black;" align="center" colspan="4">Jumlah</td>
            <td style="border:1px solid black;" align="center"><?php echo $totalStrike; ?></td>
            <td style="border:1px solid black;" align="center"><?php echo $totalStrongStrike; ?></td>
            <td style="border:1px solid black;" align="center"><?php echo $totalCGPlus; ?></td>
            <td style="border:1px solid black;" align="center"><?php echo $totalCGMin; ?></td>
            <td style="border:1px solid black;" align="center"><?php echo $totalIC; ?></td>
        </tr>
		<tr>
        	<td colspan="9"><i>*Data Kosong = Lost Data</i><br></td>
        </tr>
		<?php
        if($_SESSION['Statuspengguna']=="Admin")
        {	
        ?>
		<tr>
            <td colspan="9">
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
                            Denpasar, <?php echo gmdate('d F y'); ?><br>
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
</table><br><br><br>

<footer></footer>
<?php
	$totalpercent=$totalStrike + $totalStrongStrike + $totalCGPlus + $totalCGMin + $totalIC;
		$PercentStrike=ceil(($totalStrike/$totalpercent)*100);
		$PercentStrongStrike=ceil(($totalStrongStrike/$totalpercent)*100);
		$PercentCGPlus=ceil(($totalCGPlus/$totalpercent)*100);
		$PercentCGMin=ceil(($totalCGMin/$totalpercent)*100);
		$PercentIC=ceil(($totalIC/$totalpercent)*100);
?>
<script type="text/javascript">
$(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Grafik Rekapitulasi Prosentase Hasil Monitoring Sistem Prosesing Petir Bulan <?php echo $bln." ".$_POST['PB_THN']; ?>'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Strike (<?php echo $PercentStrike; ?>%)',
                    y: <?php echo $totalStrike; ?>
                }, {
                    name: 'Strong Strike (<?php echo $PercentStrongStrike; ?>%)',
                    y: <?php echo $totalStrongStrike; ?>
                }, {
                    name: 'CG+ (<?php echo $PercentCGPlus; ?>%)',
                    y: <?php echo $totalCGPlus; ?>
                }, {
                    name: 'CG- (<?php echo $PercentCGMin; ?>%)',
                    y: <?php echo $totalCGMin; ?>
                }, {
                    name: 'IC (<?php echo $PercentIC; ?>%)',
                    y: <?php echo $totalIC; ?>
                }]
            }]
        });
    });
});
</script>
<?php
	if($_SESSION['Statuspengguna']=="Admin")
	{
	include "kop.html";
	}
?>
<div id="container" style="min-width:250px; height:300px; max-width:600px; margin:0 auto;"></div><br>
<div id="peta" style="width:600px; height:500px; margin:0 auto;"></div>
<center>Gambar 1.Peta sebaran sambaran petir pada bulan <?php echo $bln." ".$_POST['PB_THN']; ?> di wilayah Bali.</center>
