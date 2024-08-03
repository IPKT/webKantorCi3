<?php
	session_set_cookie_params(0);
	error_reporting(0);

   class MyDB extends SQLite3
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

            <table border="0">
                <tr style="border:1px solid black;">
                    <td width="200px">Strike</td>
                    <td>: <?php echo $Strike; ?> Sambaran</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td width="200px">Average/minute</td>
                    <td>: <?php echo round($AveStrike = $Strike / 1440, 5); ?> Sambaran/menit</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Strong Strike</td>
                    <td>: <?php echo $StrongStrike; ?> Sambaran</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Average/minute</td>
                    <td>: <?php echo round($AveStrongStrike = $StrongStrike / 1440, 5); ?> Sambaran/menit</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>CG +</td>
                    <td>: <?php echo $CGPlus; ?> Sambaran</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Average/minute</td>
                    <td>: <?php echo round($AveCGPlus = $CGPlus / 1440, 5); ?> Sambaran/menit</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>CG -</td>
                    <td>: <?php echo $CGMin; ?> Sambaran</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Average/minute</td>
                    <td>: <?php echo round($AveCGMin = $CGMin / 1440, 5); ?> Sambaran/menit</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>IC</td>
                    <td>: <?php echo $IC; ?> Sambaran</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Average/minute</td>
                    <td>: <?php echo round($AveIC = $IC / 1440, 5); ?> Sambaran/menit</td>
                </tr>
            </table>
            di area Bali  dan sekitarnya.
		
<?php
}
?>