<?php
	include "kop.html";
?>
<br>
<table border="0" width="600px" align="center">
	<tr>
    	<td width="70px">Nomor</td>
        <td width="320px">: <?php echo $NoSurat; ?></td>
        <td>Denpasar, <?php echo gmdate('d F Y'); ?></td>
    </tr>
    <tr>
    	<td>Sifat</td>
        <td colspan="2">: Biasa</td>
    </tr>
    <tr>
    	<td>Lampiran</td>
        <td colspan="2">: 1 (Satu) berkas</td>
    </tr>
    <tr>
    	<td valign="top">Hal</td>
        <td valign="top" colspan="2" height="50px">: Laporan Berita Petir dan Cuaca</td>
    </tr>
    <tr>
    	<td colspan="4" valign="top">
        	<table border="0">
            	<tr>
                	<td width="50px"></td>
                	<td>Kepada</td>
                </tr>
                <tr>
                	<td>Yth.</td>
                	<td><?php echo $NamaPemohon; ?></td>
                </tr>
                <tr>
                	<td></td>
                	<td><?php echo $PerBidPemohon; ?></td>
                </tr>
                <tr>
                	<td></td>
                	<td>di -</td>
                </tr>
                <tr>
                	<td></td>
                	<td>TEMPAT</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
    </tr>
    <tr>
    	<td></td>
        <td colspan="2">1. Bersama ini kami sampaikan Laporan Berita Petir tanggal <?php echo $TGLPemohon."-".$BLNPemohon."-".$THNPemohon; ?> di daerah <?php echo $DaerahLatLong; ?>.</td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
    </tr>
    <tr>
    	<td></td>
        <td colspan="2">2. Demikian disampaikan untuk dipergunakan sebagai data dukung <?php echo $DiperUtkPemohon; ?>.</td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
    </tr>
    <tr>
    	<td colspan="3" align="right">
        	<table>
            	<tr>
                	<td>KEPALA SEKSI OBSERVASI DAN<br>INFORMASI</td>
                </tr>
                <tr>
                	<td height="80px" valign="top">STASIUN GEOFISIKA SANGLAH DENPASAR</td>
                </tr>
                <tr>
                	<td><u>SRI WINARTI, SP</u></td>
                </tr>
                <tr>
                	<td>NIP. 196105301984032001</td>
                </tr>
            </table>
        </td>
    </tr>
</table><br><br>
<footer></footer>