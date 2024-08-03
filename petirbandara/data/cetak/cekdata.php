	<meta charset="UTF-8">
    <title>Stasiun Sanglah Denpasar</title>
    <link href="../../img/favicon.ico" type="icon/x-image" rel="shortcut icon" /> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<style type="text/css">
	@media print {
    	footer {page-break-after: always;}
	}
</style>

<?php
	include "../connection.php";
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
	
	$GetIDPemohon=$_GET['id'];
	
	$listpermohonan=$mysqli->query("SELECT * FROM tb_pemohon WHERE IDPemohon='$GetIDPemohon'");
	$tampunglistpemohon=mysqli_fetch_array($listpermohonan);
		$NamaPemohon=$tampunglistpemohon['NamaPemohon'];
		$PekerjaanPemohon=$tampunglistpemohon['PekerjaanPemohon'];
		$PerBidPemohon=$tampunglistpemohon['PerBidPemohon'];
		$Alamat=$tampunglistpemohon['Alamat'];
		$KodePosPemohon=$tampunglistpemohon['KodePosPemohon'];
		$KartuIdentitas=$tampunglistpemohon['KartuIdentitas'];
		$NoKartu=$tampunglistpemohon['NoKartu'];
		$TeleponPemohon=$tampunglistpemohon['TeleponPemohon'];
		$JenisData=$tampunglistpemohon['JenisData'];
		$DiperUtkPemohon=$tampunglistpemohon['DiperUtkPemohon'];
		$TGLPemohon=$tampunglistpemohon['TGLPemohon'];
		$BLNPemohon=$tampunglistpemohon['BLNPemohon'];
		$THNPemohon=$tampunglistpemohon['THNPemohon'];
		$JAMPemohon=$tampunglistpemohon['JAMPemohon'];
		$MNTPemohon=$tampunglistpemohon['MNTPemohon'];
		$IDLatLong=$tampunglistpemohon['IDLatLong'];
			$listIDLatLong=$mysqli->query("SELECT * FROM tb_latlong WHERE IDLatLong='$IDLatLong'");
            	$tampunglistIDLatLong=mysqli_fetch_array($listIDLatLong);
            	$DaerahLatLong=$tampunglistIDLatLong['DaerahLatLong'];
				$Latitude=$tampunglistIDLatLong['Latitude'];
				$Longitude=$tampunglistIDLatLong['Longitude'];
		$NoSurat=$tampunglistpemohon['NoSurat'];
		$NoBeritaPetir=$tampunglistpemohon['NoBeritaPetir'];
		$NoKwitansi1=$tampunglistpemohon['NoKwitansi1'];
		$JumlahKWa=$tampunglistpemohon['JumlahKWa'];
		$TerbilangKWa=$tampunglistpemohon['TerbilangKWa'];
		$NoKwitansi2=$tampunglistpemohon['NoKwitansi2'];
		$JumlahKWb=$tampunglistpemohon['JumlahKWb'];
		$TerbilangKWb=$tampunglistpemohon['TerbilangKWb'];
		
		$NamaModal="myModalNomor".$GetIDPemohon;
	
	include "map.php";
	
?>

	<div class="modal fade" id="<?php echo $NamaModal; ?>" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="CetakData.php" method="post">
                <input type="hidden" name="NIP" value="<?php echo $_SESSION['NIP']; ?>">
                <input type="hidden" name="IDPemohon" value="<?php echo $GetIDPemohon; ?>">
                    <div class="modal-header">   
                        <h4 class="modal-title">Form Pencetakan</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center">
                            	<tr>
                                    <td align="center" colspan="3"><font size="+2">Penomoran Surat</font></td>
                                </tr>
                                <tr>
                                    <td>Nomor Surat</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="NoSurat" style="width:300px;" value=""></td>
                                </tr>
                                <tr>
                                    <td>Nomor Berita Petir</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="NoBeritaPetir" style="width:300px;"></td>
                                </tr>
                                <tr>
                                    <td>Nomor Berita Cuaca</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="NoBeritaCuaca" style="width:300px;"></td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="3"><hr></td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="3"><font size="+2">Data Kwitansi</font></td>
                                </tr>
                                <tr>
                                    <td>Nomor Kwitansi a</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="NoKwitansi1" style="width:300px;"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp; - Jumlah</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td>Rp. <input type="text" name="JumlahKWa" style="width:150px;"> Contoh : 100.000</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp; - Terbilang</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="TerbilangKWa" style="width:300px;"></td>
                                </tr>
                                <tr>
                                    <td>Nomor Kwitansi b</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="NoKwitansi2" style="width:300px;"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp; - Jumlah</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td>Rp. <input type="text" name="JumlahKWb" style="width:150px;"> Contoh : 100.000</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp; - Terbilang</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="TerbilangKWb" style="width:300px;"></td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="3"><hr></td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="3"><font size="+2">Data Cuaca Pata Tanggal <?php echo $THNPemohon."-".$BLNPemohon."-".$TGLPemohon; ?></font></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Curah Hujan</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="JumlahCurah" style="width:150px;"> mm</td>
                                </tr>
                                <tr>
                                    <td>Temperatur Max</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="TmpMax" style="width:150px;"> &#8451;</td>
                                </tr>
                                <tr>
                                    <td>Temperatur Min</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="TmpMin" style="width:150px;"> &#8451;</td>
                                </tr>
                                <tr>
                                    <td>Tekanan Udara Max</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="UdaraMax" style="width:150px;"> mb</td>
                                </tr>
                                <tr>
                                    <td>Tekanan Udara Min</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="UdaraMin" style="width:150px;"> mb</td>
                                </tr>
                                <tr>
                                    <td>RH Max</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="RHMax" style="width:150px;"></td>
                                </tr>
                                <tr>
                                    <td>RH Min</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="RHMin" style="width:150px;"></td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Cetak</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<table align="center" border="0">
	<tr>
    	<td align="center" colspan="2" style='padding:5px;'>
        Berdasarkan hasil olah data pada tanggal <?php echo $THNPemohon."-".$BLNPemohon."-".$TGLPemohon; ?>, mendapat hasil pada tanggal tersebut
        	<?php 
				if($Petir == "terjadi")
				{ echo "<br><font size='+2' color='#FF0000'>TERJADI SAMBARAN</font><br>Pada pukul ".$UTCtoWITAawal.".".$DJAMawal[1]; ?> - <?php echo $UTCtoWITAakhir.".".$DJAMakhir[1]." WITA"; }
				else
				{ echo "<br><font size='+2' color='#FF0000'>TIDAK TERJADI SAMBARAN</font><br>"; }
			?>
        Pada daerah <?php echo $DaerahLatLong; ?>
        </td>
    </tr>
	<tr>
    	<td align="center" bgcolor="#FFFF00" style='padding:5px;'>
        	<font size="+2">Sambaran Petir Pada Tanggal <?php echo $THNPemohon."-".$BLNPemohon."-".$TGLPemohon; ?> </font>
        </td>
        <td align="center" bgcolor="#FFFF00" style='padding:5px;'>
        	<font size="+2">Sambaran Petir Pada Tanggal <?php echo $THNPemohon."-".$BLNPemohon."-".$TGLPemohon; ?><br>Pukul <?php echo $UTCtoWITAawal.".".$DJAMawal[1]; ?> - <?php echo $UTCtoWITAakhir.".".$DJAMakhir[1]; ?> WITA</font>
        </td>
    </tr>
    <tr>
    	<td style='padding:5px;'>
        	<div id="peta" style="width:600px; height:500px;"></div>
        </td>
        <td style='padding:5px;'>
        	<div id="peta2" style="width:600px; height:500px;"></div>
        </td>
    </tr>
    <tr>
    	<td align="center" colspan="2" style='padding:5px;'>
        	<?php
            	if(empty($NoSurat) && empty($NoBeritaPetir) && empty($NoKwitansi1) && empty($NoKwitansi2))
				{
					echo $Tombol="<a data-toggle='modal' data-target='#myModalNomor$GetIDPemohon' class='btn btn-primary btn-lg' style='padding-top:5px; padding-bottom:5px; padding-left:10px; padding-right:10px;'>CETAK</a>";	
				}
				else
				{
					echo $Tombol="<a href='detaildata.php?id=$GetIDPemohon' class='btn btn-primary btn-lg' style='padding-top:5px; padding-bottom:5px; padding-left:10px; padding-right:10px;'>LIHAT</a>";
				}
				
				echo $TombolTutup="&nbsp;&nbsp;<button onClick='self.close()' class='btn btn-default btn-lg' style='padding-top:5px; padding-bottom:5px; padding-left:10px; padding-right:10px;'>TUTUP</button>";
			?>
        </td>
    </tr>
</table>