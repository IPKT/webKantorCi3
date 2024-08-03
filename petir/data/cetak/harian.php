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
	  
<!-------------------MAP 1------------------->
	var map;
    var locations1 = [
	<?php
   class MyDBmap1 extends SQLite3
   {
      function __construct()
      {
		 $TGL = $_POST['TGLPemohon'];
		 $BLN = $_POST['BLNPemohon'];
		 $THN = $_POST['THNPemohon'];
		 $Tanggal = $THN."".$BLN."".$TGL;
         $this->open('C:\xampp\htdocs\BMKG\assets\database\db_petir\NGXDS_'.$Tanggal.'.db3');
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
		 $TGL = $_POST['TGLPemohon'];
		 $BLN = $_POST['BLNPemohon'];
		 $THN = $_POST['THNPemohon'];
		 $Tanggal = $THN."".$BLN."".$TGL;
         $this->open('C:\xampp\htdocs\BMKG\assets\database\db_petir\\NGXDS_'.$Tanggal.'.db3');
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

    //Parameter Google maps
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
	
	var marker1, i;
    for (i = 0; i <= locations1.length; i++) { 
		if(CGmap1[i]==0)
		{
		marker1 = new google.maps.Marker({
			position: new google.maps.LatLng(locations1[i][1], locations1[i][2]),
			map: map,
			 icon: 'img/CGPlus.png',
			title: locations1[i][3]
		  });
		}
		else if(CGmap1[i]==1)
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

<?php
	session_set_cookie_params(0);
	error_reporting();
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
	
	$TGL_1 = $_POST['TGLPemohon']."/".$_POST['BLNPemohon']."/".$_POST['THNPemohon'];

   class MyDB extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = $_POST['THNPemohon']."".$_POST['BLNPemohon']."".$_POST['TGLPemohon'];
         $this->open('C:\xampp\htdocs\BMKG\assets\database\db_petir\NGXDS_'.$TGL_2.'.db3');
      }
   }
   
   $Strike = 0;
   $StrongStrike = 0;
   $CGPlus = 0;
   $CGMin = 0;
   $IC = 0;
   
   	$db = new MyDB();
   $sql =<<<EOF
      SELECT * from NGXLIGHTNING;
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
   }
   $db->close();
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
                name: 'Stike',
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
            <table border="0" cellpadding="10px" style="border-collapse:collapse;" width="170">
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
        <td valign="top">
            <div id="container" style="min-width:380px; height:230px; max-width:500px; margin: 0 auto"></div>
        </td>
	</tr>
	<tr>
		<td align="center" colspan="2">
        	<div id="peta" style="width:600px; height:400px;"></div>
            Gambar 1.Peta sebaran sambaran petir pada tanggal <?php echo $_POST['TGLPemohon']."-".$_POST['BLNPemohon']."-".$_POST['THNPemohon']; ?> di wilayah Bali.
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
</table>
<?php
}
?>