<?php
	include "kop.html";
	
	$cekdariJAM		= $JAMPemohon-1;
	$ceksampaiJAM	= $JAMPemohon+1;
	
	if($cekdariJAM > 24)
	{
		$dari = $cekdariJAM - 24;
	}
	elseif($cekdariJAM == 24)
	{
		$dari = "00";
	}
	elseif($cekdariJAM < "00")
	{
		$dari = "23";
	}
	elseif($cekdariJAM == "00")
	{
		$dari = "00";
	}
	else
	{
		$dari = $cekdariJAM;
	}
	
	if($ceksampaiJAM > 24)
	{
		$sampai = $ceksampaiJAM - 24;
	}
	elseif($ceksampaiJAM == 24)
	{
		$sampai = "00";
	}
	elseif($ceksampaiJAM < "00")
	{
		$sampai = "23";
	}
	elseif($ceksampaiJAM == "00")
	{
		$sampai = "00";
	}
	else
	{
		$sampai = $ceksampaiJAM;
	}
	
	if($dari < 10)
	{
		$FIXdari = "0".$dari;
	}
	else
	{
		$FIXdari = $dari;
	}
	
	if($sampai < 10)
	{
		$FIXsampai = "0".$sampai;
	}
	else
	{
		$FIXsampai = $sampai;
	}
?>

<br>
<table border="0" width="600px" align="center">
    <tr>
    	<td align="center">PEMETAAN SAMBARAN PETIR TANGGAL <?php echo $TGLPemohon."-".$BLNPemohon."-".$THNPemohon; ?> PUKUL <?php echo $UTCtoWITAawal.".".$DJAMawal[1]; ?> - <?php echo $UTCtoWITAakhir.".".$DJAMakhir[1]; ?> WITA</td>
    </tr>
    <tr>
    	<td align="center">
        	<div id="peta2" style="width:600px; height:500px;">
            </div>
            Gambar 2 Peta sebaran sambaran petir tanggal <?php echo $TGLPemohon."-".$BLNPemohon."-".$THNPemohon; ?> pukul <?php echo $UTCtoWITAawal.".".$DJAMawal[1]; ?> - <?php echo $UTCtoWITAakhir.".".$DJAMakhir[1]; ?> WITA.<br>
            Pada lingkaran merah menunjukkan lokasi kejadian di wilayah <?php echo $DaerahLatLong; ?>.
        </td>
    </tr>
</table>
<br><br><br>
<footer></footer>