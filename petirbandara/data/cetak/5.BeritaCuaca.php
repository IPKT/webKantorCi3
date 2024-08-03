<?php
	include "kop.html";
?>
<br>
<table border="0" width="600px" align="center">
	<tr>
    	<td align="center" colspan="2"><b><u>BERITA CUACA</u></b></td>
    </tr>
    <tr>
    	<td align="center" colspan="2">No. <?php echo $NoBeritaCuaca; ?></td>
    </tr>
    <tr>
    	<td align="center" colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td valign="top">4.</td>
        <td valign="top" align="justify">
        	Berita Cuaca pada tanggal <?php echo $TGLPemohon."-".$BLNPemohon."-".$THNPemohon; ?>, dari hasil analisis Stasiun Geofisika Sanglah Denpasar dengan parameter kondisi cuaca sebagai berikut :
        </td>
    </tr>
    <tr>
    	<td align="center" colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td align="center" colspan="2">
        	<table border="0" width="500px">
                <tr style="border:1px solid black;">
                    <td width="200px">Pada Tanggal</td>
                    <td>: <?php echo $TGLPemohon."-".$BLNPemohon."-".$THNPemohon; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td width="200px">Jumlah Curah Hujan</td>
                    <td>: <?php echo $JumlahCurah; ?> mm</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Temperatur Max</td>
                    <td>: <?php echo $TmpMax; ?> &#8451</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Temperatur Min</td>
                    <td>: <?php echo $TmpMin; ?> &#8451</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Tekanan Udara Max</td>
                    <td>: <?php echo $UdaraMax; ?> mb</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>Tekanan Udara Min</td>
                    <td>: <?php echo $UdaraMin; ?> mb</td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>RH Max</td>
                    <td>: <?php echo $RHMax; ?></td>
                </tr>
                <tr style="border:1px solid black;">
                    <td>RH Min</td>
                    <td>: <?php echo $RHMin; ?></td>
                </tr>
                <tr>
                	<td colspan="2">
            			Dimana <?php echo $Petir; ?> petir dan hujan pada pukul <?php echo $UTCtoWITAawal.".".$DJAMawal[1]; ?> - <?php echo $UTCtoWITAakhir.".".$DJAMakhir[1]; ?> WITA di <?php echo $DaerahLatLong; ?> dan sekitarnya.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<td align="center" colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td valign="top">5.</td>
        <td valign="top" align="justify">
        	Demikian Laporan Berita Cuaca yang dapat kami sampaikan untuk dipergunakan sebagaimana mestinya.
        </td>
    </tr>
    <tr>
    	<td align="center" colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td colspan="2">
        	<table align="right">
            	<tr>
                	<td><u>Dibuat di : Denpasar</u></td>
                </tr>
                <tr>
                	<td><u>Pada tanggal : <?php echo gmdate('d F Y'); ?></u></td>
                </tr>
                <tr>
                	<td>PEMBUAT LAPORAN</td>
                </tr>
                <tr>
                	<td>&nbsp;</td>
                </tr>
                <tr>
                	<td>&nbsp;</td>
                </tr>
                <tr>
                	<td>&nbsp;</td>
                </tr>
                <tr>
                	<td>
                    	<u>
						<?php 
							$CekNamaNIP=$mysqli->query("SELECT * FROM tb_pengguna WHERE NIP='$_SESSION[NIP]'"); 
							$TampungNamaNIP=mysqli_fetch_array($CekNamaNIP);
								echo $NamaNIP=$TampungNamaNIP['Nama'];
						?>
                        </u>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<?php echo $_SESSION['NIP']; ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table><br><br>
<footer></footer>
