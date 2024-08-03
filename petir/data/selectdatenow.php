<?php
error_reporting(0);

$TGL_1 = gmdate('d/m/Y');

class MyDB extends SQLite3
   {
      function __construct()
      {
		 $TGL_2 = gmdate('Ymd');
         //$this->open('C:\xampp\htdocs\petir\data\db\NGXDS_'.$TGL_2.'.db3');
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
	echo "<center><font color='red'>TIDAK ADA DATA</font></center>";
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

<table align="center" border="0">
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
	</tr>
</table>
<?php
}
?>