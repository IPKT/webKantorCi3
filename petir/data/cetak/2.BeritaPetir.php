<?php
	include "kop.html";
?>
<br>
<table border="0" width="600px" align="center">
	<tr>
    	<td align="center" colspan="2"><b><u>BERITA PETIR</u></b></td>
    </tr>
    <tr>
    	<td align="center" colspan="2">No. <?php echo $NoBeritaPetir; ?></td>
    </tr>
    <tr>
    	<td align="center" colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td valign="top">1.</td>
        <td valign="top" align="justify">
        	Berdasarkan hasil pantauan petir di Stasiun Geofisika Sanglah Denpasar pada tanggal <?php echo $TGLPemohon."-".$BLNPemohon."-".$THNPemohon; ?> diperoleh parameter petir sebagai berikut :
        </td>
    </tr>
    <tr>
    	<td align="center" colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td></td>
    	<td style="padding-left:50px;">
        	<?php include "databeritapetir.php"; ?>
        </td>
    </tr>
    <tr>
    	<td align="center" colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td valign="top">2.</td>
        <td valign="top" align="justify">
        	Berdasarkan permohonan saudara/i <?php echo $NamaPemohon; ?> <?php if(!empty($PerBidPemohon)){echo "dari ".$PerBidPemohon;} ?> mengenai kejadian sambaran petir pada tanggal <?php echo $TGLPemohon."-".$BLNPemohon."-".$THNPemohon; ?> pukul <?php echo $UTCtoWITAawal.":".$DJAMawal[1]; ?> WITA, kami laporkan bahwa  pada tanggal dan jam tersebut <b><u><?php echo $Petir; ?></u></b> sambaran petir pada daerah <?php echo $DaerahLatLong; ?>.
        </td>
    </tr>
    <tr>
    	<td align="center" colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td valign="top">3.</td>
        <td valign="top" align="justify">
        	Data pemetaan terlampir.
        </td>
    </tr>
    <tr>
    	<td align="center" colspan="2">&nbsp;</td>
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
