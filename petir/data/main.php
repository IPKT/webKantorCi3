<div class="row">
	<div class="col-sm-7">           
    	<div id="centerPage" style="left:50%; top:50%;">
        	<div tabindex="0" class="leaflet-container leaflet-fade-anim" id="map" style="left: 0px; top:0px; width: 650px; height: 440px; position: relative; background-color: black;">
                <canvas id="pnlClockCanvas" width="220" height="30" style="z-index: 2; position:relative; left:5px; top:5px;">
                    Your browser does not support HTML5 Canvas.
                </canvas>
    
                <canvas id="pnlCanvas" width="245" height="330" style="z-index: 2; position:relative; left:450px; top:5px;">
                    Your browser does not support HTML5 Canvas.
                </canvas>
    
                <canvas id="pnlSymCanvas" width="245" height="65" style="z-index: 2; position:relative; left:450px; top:340px;">
                    Your browser does not support HTML5 Canvas.
                </canvas>
        	</div>
    	</div>
	</div>
	<div class="col-sm-5">
		<center>
        	<h3>DATA PETIR HARI INI</h3>
    		<?php include "selectdatenow.php"; ?><br><br>
        	<img src="http://geofisika.bali.bmkg.go.id/data/realtime.jpg" class="img-responsive" alt="kerapatan petir" width="245" height="215">
			<i>peta kerapatan petir</i>
        </center>
	</div>
</div>

<?php
	include "connection.php";
	include "validation.php";

	/*
	if(gmdate('m')=="01" || gmdate('m')=="1")
		{ $bln="Januari"; }
	elseif(gmdate('m')=="02" || gmdate('m')=="2")
		{ $bln="Februari"; }
	elseif(gmdate('m')=="03" || gmdate('m')=="3")
		{ $bln="Maret"; }
	elseif(gmdate('m')=="04" || gmdate('m')=="4")
		{ $bln="April"; }
	elseif(gmdate('m')=="05" || gmdate('m')=="5")
		{ $bln="Mei"; }
	elseif(gmdate('m')=="06" || gmdate('m')=="6")
		{ $bln="Juni"; }
	elseif(gmdate('m')=="07" || gmdate('m')=="7")
		{ $bln="Juli"; }
	elseif(gmdate('m')=="08" || gmdate('m')=="8")
		{ $bln="Agustus"; }
	elseif(gmdate('m')=="09" || gmdate('m')=="9")
		{ $bln="September"; }
	elseif(gmdate('m')=="10")
		{ $bln="Oktober"; }
	elseif(gmdate('m')=="11")
		{ $bln="November"; }
	elseif(gmdate('m')=="12")
		{ $bln="Desember"; }
?>
        
<h3>
	<center>DATA PETIR BULAN INI</center>
</h3>
<table align="center" border="1" cellpadding="5px" width="600" style="border-collapse:collapse;">
	<tr style="border:1px solid black;">
        	<td style="border:1px solid black;" align="center" rowspan="3">No</td>
            <td style="border:1px solid black;" align="center" colspan="8">Informasi Kelistrikan Udara Bulan <?php echo $bln." ".gmdate('Y'); ?></td>
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
	include "selectmonthnow.php";
?>
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
</table>
*/?>