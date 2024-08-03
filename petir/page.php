<!DOCTYPE html>
<html lang="en">
<head>
	<title>BMKG DENPASAR</title>
	<link href="img/favicon.ico" type="icon/x-image" rel="shortcut icon" />
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<script src="bootstrap/js/jquery-1.12.4.js"></script>
	<script src="bootstrap/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/nivo-lightbox.css">
  	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
  	<link rel="stylesheet" href="css/hover-min.css">
  	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css?u=17">
	<link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/MarkerCluster.css" type="text/css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <script>L_PREFER_CANVAS = true;</script>
    <script src="lib/leaflet_073mod.js"></script>
    <script src="lib/leaflet.markercluster.js"></script>
    <script src="lib/Leaflet.Geodesic.js"></script>
    <script src="lib/extentsions.js"></script>
    <script src="lib/preLoad.js"></script>
    <script src="lib/symbols.js"></script>
    <script src="lib/Counter.js"></script>
    <script src="lib/Util.js"></script>
    <script src="lib/ClockPanel.js"></script>
    <script src="lib/DataPanel.js"></script>
    <script src="lib/LegendPanel.js"></script>
    <script src="lib/LegendPanelNC.js"></script>
    <script src="options/mapProviders.js"></script>
    <script src="lib/main.js"></script>
	<script type="text/javascript" src="data/Ajax.js?u=35"></script>
</head>
	
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50" onload="startTime()">
	<?php
		include "data/validation.php";
		include "data/connection.php";
	?>
	
	<div class="modal fade" id="myModal" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" name="UPass-Form" onSubmit="return UbahPassword()">
                <input type="hidden" name="NIP" value="<?php echo $_SESSION['NIP'];?>">
                    <div class="modal-header">   
                        <h4 class="modal-title">Ubah Password</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center">
                                <tr>
                                    <td>Masukkan Password Baru</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="password" name="passbaru" required></td>
                                </tr>
                                <tr>
                                    <td>Ulangi Password Baru</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="password" name="ulangpassbaru" required></td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btn-UPass">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
         </div>
     </div>
	
	<div class="modal fade" id="myModalPengguna" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" name="TPengguna-Form" onSubmit="return TambahPengguna()">
                <input type="hidden" name="NIP" value="<?php echo $_SESSION['NIP'];?>">
                    <div class="modal-header">   
                        <h4 class="modal-title">Tambah Pengguna</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center">
                                <tr>
                                    <td>NIP</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="addNIP" required></td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="addNama" required></td>
                                </tr>
                                <tr>
                                    <td>User ID</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="addUsr" required></td>
                                </tr>
                                <tr>
                                    <td>Status Pengguna</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td>
                                    	<input type="radio"  name="StatusPengguna" value="Admin" required> Admin
                                    	<input type="radio"  name="StatusPengguna" value="Petugas" required> Petugas
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="password" name="addPwd" required></td>
                                </tr>
                                <tr>
                                    <td>Ulangi Password</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="password" name="readdPwd" required></td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btn-TPengguna">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="myModalDaerah" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" name="TKoordinat-Form" onSubmit="return TambahKoordinat()">
                <input type="hidden" name="NIP" value="<?php echo $_SESSION['NIP'];?>">
                    <div class="modal-header">   
                        <h4 class="modal-title">Tambah Koordinat Daerah</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center">
                                <tr>
                                    <td>Nama Daerah</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="DaerahLatLong" required> Kab, Kec, Desa</td>
                                </tr>
                                <tr>
                                    <td>Latitude</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="Latitude" required> Contoh : -8.123456</td>
                                </tr>
                                <tr>
                                    <td>Longitude</td>
                                    <td>&nbsp; : &nbsp;</td>
                                    <td><input type="text" name="Longitude" required> Contoh : -115.123456</td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                       <button type="submit" class="btn btn-primary" name="btn-TKoordinat">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="myModalHarian" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="data/cetak/harian.php" method="post" target="_blank">
                    <div class="modal-header">   
                        <h4 class="modal-title">Data Petir Harian</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center" border="0">
                                <tr>
                                    <td>
                                    	Cari Tanggal : 
                                        <input type="text" name="TGLPemohon" style="width:30px;">&nbsp; / &nbsp;
                                        <input type="text" name="BLNPemohon" style="width:30px;">&nbsp; / &nbsp;
                                        <input type="text" name="THNPemohon" style="width:50px;">
                                    </td>
                                </tr>
                                <?php
									if($_SESSION['Statuspengguna']=="Admin")
									{
								?>
                                <tr>
                                    <td align="left" valign="top"><br>
                                        <input type="checkbox" name="isi" value="isi">
                                        MASUKKAN NOMOR TABEL PADA LAPORAN : <input type="text" name="notabel" style="width:50px;">
                                    </td>
                                </tr>
                                <?php
									}
								?>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Lihat</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="myModalBulanan" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="data/cetak/bulanan.php" method="post" target="_blank">
                    <div class="modal-header">   
                        <h4 class="modal-title">Data Petir Bulanan</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center">
                                <tr>
                                    <td>
                                    	Cari Bulan : 
                                        <input type="text" name="PB_BLN" style="width:30px;">&nbsp; / &nbsp;
                                        <input type="text" name="PB_THN" style="width:50px;">
                                    </td>
                                </tr>
                                <?php
									if($_SESSION['Statuspengguna']=="Admin")
									{
								?>
                                <tr>
                                    <td align="left" valign="top"><br>
                                        <input type="checkbox" name="isi" value="isi">
                                        MASUKKAN NOMOR TABEL PADA LAPORAN : <input type="text" name="notabel" style="width:50px;">
                                    </td>
                                </tr>
                                <?php
									}
								?>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Lihat</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="myModalConvertData" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="data/cetak/bulanan.php" method="post" target="_blank">
                    <div class="modal-header">   
                        <h4 class="modal-title">Convert Data</h4>
                    </div>
                    <div class="modal-body"> COMMING SOON
                            <!--<table align="center">
                                <tr>
                                    <td>
                                    	Cari Bulan : 
                                        <input type="text" name="PB_BLN" style="width:30px;">&nbsp; / &nbsp;
                                        <input type="text" name="PB_THN" style="width:50px;">
                                    </td>
                                </tr>
                                <?php
									if($_SESSION['Statuspengguna']=="Admin")
									{
								?>
                                <tr>
                                    <td align="left" valign="top"><br>
                                        <input type="checkbox" name="isi" value="isi">
                                        MASUKKAN NOMOR TABEL PADA LAPORAN : <input type="text" name="notabel" style="width:50px;">
                                    </td>
                                </tr>
                                <?php
									}
								?>
                            </table>-->
                    </div>
                    <div class="modal-footer">
                        <!--<button type="submit" class="btn btn-primary">Lihat</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="myModalGridDataPetir" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="data/cetak/cekGridHarian.php" method="post" target="_blank">
                    <div class="modal-header">   
                        <h4 class="modal-title">Grid & Kontur Map</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center" border="0">
                                <tr>
                                    <td>
                                    	Cari Tanggal
									</td>
									<td>: 
                                        <input type="text" name="TGLGrid" style="width:30px;">&nbsp; / &nbsp;
                                        <input type="text" name="BLNGrid" style="width:30px;">&nbsp; / &nbsp;
                                        <input type="text" name="THNGrid" style="width:50px;">
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                    	Jumlah Kolom dan Baris
									</td>
									<td>: 
                                        <input type="text" name="Grid" style="width:30px;">
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                    	Latitude
									</td>
									<td>: 
                                        <input type="text" name="LatMin" style="width:100px;" value="-7.67634"> - 
										<input type="text" name="LatMax" style="width:100px;" value="-9.67634">
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                    	Longitude
									</td>
									<td>: 
                                        <input type="text" name="LongMin" style="width:100px;" value="114.21"> - 
										<input type="text" name="LongMax" style="width:100px;" value="116.21">
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Lihat</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="myModalGridDataPetirBulanan" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="data/cetak/cekGridBulanan.php" method="post" target="_blank">
                    <div class="modal-header">   
                        <h4 class="modal-title">Grid & Kontur Map Bulanan</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center" border="0">
                                <tr>
                                    <td>
                                    	Cari Tanggal
									</td>
									<td>: 
                                        <input type="text" name="BLNGrid" style="width:30px;">&nbsp; / &nbsp;
                                        <input type="text" name="THNGrid" style="width:50px;">
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                    	Jumlah Kolom dan Baris
									</td>
									<td>: 
                                        <input type="text" name="Grid" style="width:30px;">
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                    	Latitude
									</td>
									<td>: 
                                        <input type="text" name="LatMin" style="width:100px;" value="-7.67634"> - 
										<input type="text" name="LatMax" style="width:100px;" value="-9.67634">
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                    	Longitude
									</td>
									<td>: 
                                        <input type="text" name="LongMin" style="width:100px;" value="114.21"> - 
										<input type="text" name="LongMax" style="width:100px;" value="116.21">
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Lihat</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
	<script>
		var Harian	= "<tr><td>Cari Tanggal</td><td>: <input type='text' name='TGLGrid' style='width:30px;'>&nbsp; / &nbsp;<input type='text' name='BLNGrid' style='width:30px;'>&nbsp; / &nbsp;<input type='text' name='THNGrid' style='width:50px;'></td></tr>";
		var Bulanan	= "<tr><td>Cari Bulan</td><td>: <input type='text' name='BLNGrid' style='width:30px;'>&nbsp; / &nbsp;<input type='text' name='THNGrid' style='width:50px;'></td></tr>";
	</script>
	<div class="modal fade" id="myModalLogGridDataPetir" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="data/cetak/DownloadLogGridKontur.php" method="post" target="_blank">
                    <div class="modal-header">   
                        <h4 class="modal-title">Log Grid & Kontur Map</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center" border="0">
								<tr>
									<td>
										Jenis
									</td>
									<td>: 
										<button type="button" onclick="document.getElementById('JenisLog').innerHTML = Harian">Harian</button>
										<button type="button" onclick="document.getElementById('JenisLog').innerHTML = Bulanan">Bulanan</button>
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr id="JenisLog">
									<td>
										Cari Tanggal
									</td>
									<td>: 
										<input type='text' name='TGLGrid' style='width:30px;'>&nbsp; / &nbsp;
										<input type='text' name='BLNGrid' style='width:30px;'>&nbsp; / &nbsp;
										<input type='text' name='THNGrid' style='width:50px;'>
									</td>
								</tr>
								<tr>
                                    <td>
                                    	Jumlah Kolom dan Baris
									</td>
									<td>: 
                                        <input type="text" name="Grid" style="width:30px;">
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                    	Latitude
									</td>
									<td>: 
                                        <input type="text" name="LatMin" style="width:100px;" value="-7.67634"> - 
										<input type="text" name="LatMax" style="width:100px;" value="-9.67634">
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                    	Longitude
									</td>
									<td>: 
                                        <input type="text" name="LongMin" style="width:100px;" value="114.21"> - 
										<input type="text" name="LongMax" style="width:100px;" value="116.21">
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Download</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="myModalDataBaru" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" name="TDataPermohonan-Form" onSubmit="return TambahDataPermohonan()">
                <input type="hidden" name="NIP" value="<?php echo $_SESSION['NIP'];?>">
                    <div class="modal-header">   
                        <h4 class="modal-title">Permohonan Data Baru</h4>
                    </div>
                    <div class="modal-body">
                            <table align="center" border="0">
                                <tr>
                                    <td>
                                    	Tanggal permohonan
                                    </td>
                                    <td>
                                        &nbsp;: <?php echo gmdate("d / m / Y"); ?>
                                        <input type="hidden" name="TGLPermohonan" value="<?php echo gmdate("d"); ?>">
                                        <input type="hidden" name="BLNPermohonan" value="<?php echo gmdate("m"); ?>">
                                        <input type="hidden" name="THNPermohonan" value="<?php echo gmdate("Y"); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Nama Pemohon
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="NamaPemohon" style="width:300px;" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    	Pekerjaan
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <input type="radio" name="PekerjaanPemohon" value="Pegawai Swasta" required> Pegawai Swasta &nbsp;&nbsp;
                                        <input type="radio" name="PekerjaanPemohon" value="Pegawai Negeri" required> Pegawai Negeri<br>&nbsp;&nbsp;
                                        <input type="radio" name="PekerjaanPemohon" value="Wiraswasta" required> Wiraswasta &nbsp;&nbsp;
                                        <input type="radio" name="PekerjaanPemohon" value="Lain-lain" required> Lain-lain
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Nama Kantor
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="PerBidPemohon" style="width:300px;" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Alamat
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="Alamat" style="width:300px;" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Kode Pos
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="KodePosPemohon" style="width:100px;" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    	Kartu Identitas
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <input type="radio" name="KartuIdentitas" value="KTP" required> KTP &nbsp;&nbsp;
                                        <input type="radio" name="KartuIdentitas" value="SIM" required> SIM <br>&nbsp;&nbsp;
                                        <input type="text" name="NoKartu" style="width:300px;" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Telepon
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="TeleponPemohon" style="width:150px;" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Jenis Data
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="JenisData" style="width:300px;" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Tujuan Data
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="DiperUtkPemohon" style="width:300px;" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Tanggal Sambaran Petir
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <input type="text" name="TGLPemohon" style="width:30px;" required>&nbsp; /&nbsp;
                                        <input type="text" name="BLNPemohon" style="width:30px;" required>&nbsp; /&nbsp;
                                        <input type="text" name="THNPemohon" style="width:60px;" required> Contoh : 01/01/2017
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Jam Sambaran Petir
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <input type="text" name="JAMPemohon" style="width:30px;" required>&nbsp; :&nbsp;
                                        <input type="text" name="MNTPemohon" style="width:30px;" required> WITA, &nbsp; Contoh : 23:59
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Daerah Sambaran Petir
                                    </td>
                                    <td>
                                        &nbsp;: <input list="IDLatLong" name="IDLatLong" style="width:300px;" required>
                                        <datalist id="IDLatLong" required>
                                            <?php
                                                $list=$mysqli->query("SELECT * FROM tb_latlong");
                                                while($tampunglist=mysqli_fetch_array($list))
                                                {
                                                    $IDLatLong=$tampunglist['IDLatLong'];
                                                    $DaerahLatLong=$tampunglist['DaerahLatLong'];
                                                    echo "<option value='$IDLatLong' >$DaerahLatLong</option>";
                                                }
                                            ?>
                                        </datalist>
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btn-TDataPermohonan">Simpan Permohonan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<div class="modal fade" id="myModalUbah" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="Ubah"></div>
        </div>
    </div>
	
<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation" style="z-index: 9999; position:relative;">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
		<a href="#" class="navbar-brand">
			<img src="img/logo.png" width="45px">
		</a>
		<p class="navbar-brand">BMKG SANGLAH</p>
		<p style="padding-left: 61px"><font size="+1">Management Data Petir</font></p>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top" class="smoothScroll"><small>HOME</small></a></li>
		<li><a href="#login" class="smoothScroll"><small>MENU</small></a></li>
        <li class="dropdown user user-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
        	  <span><small><?php echo $_SESSION['Nama']; ?></small></span>
        	</a>
        	<ul class="dropdown-menu">
        	  <li class="user-header">
        	    <p align="center">
				  <font size="-1" style="padding-left: 20px; padding-right: 20px;"><?php echo $_SESSION['Nama']; ?></font><br>
        	      <small style="padding-left: 40px; padding-right: 40px;"><?php echo $_SESSION['NIP']; ?></small>
				  <center><div id="time"></div></center>
        	    </p>
        	  </li>
        	  <li class="user-footer">
        	    <div class="pull-left">
        	      <a data-toggle="modal" data-target="#myModal" class="btn" style="padding: 0px; padding-left: 40px; padding-right: 40px;"><img src="img/edit.png" width="20px" title="EDIT"></a>
        	    </div>
        	    <div class="pull-right">
        	      <a href="data/out.php" class="btn" style="padding: 0px; padding-left: 40px; padding-right: 40px;"><img src="img/logout.png" width="20px" title="LOGOUT"></a>
        	    </div>
        	  </li>
        	</ul>
		</li>
      </ul>
    </div>
  </div>
</div>	
	

<!-- Home section -->
<section id="home" class="parallax-section">
	<div tabindex="0" class="leaflet-container leaflet-fade-anim" id="map" style="left: 0px; top:0px; width: 100%; height: 100%; position: relative; background-color: black;">
		<canvas id="pnlClockCanvas" width="220" height="30" style="z-index: 2; position:relative; left:5px; top:5px;">
			Your browser does not support HTML5 Canvas.
		</canvas>
		<canvas id="pnlCanvas" width="245" height="330" style="z-index: 2; position:relative; left:450px; top:5px;">
			Your browser does not support HTML5 Canvas.
		</canvas>
		<canvas id="pnlSymCanvas" width="245" height="65" style="z-index: 2; position:relative; left:450px; top:330px;">
			Your browser does not support HTML5 Canvas.
		</canvas>
	</div>
</section>


<!-- login section -->
<section id="login" class="parallax-section">
  <center>
	  	<button value="DaftarPermohonanData" name="BtnMenu2" id="BtnMenu2" class="BtnMenu2 dropbtn">Daftar Permohonan Data</button>
	<div class="dropdown">
		<button onclick="myFunctionDrop1()" class="dropbtn">Cetak Data Petir</button>
		  <div id="myDropdown1" class="dropdown-content">
			<button value="Harian" name="BtnMenu1H" id="BtnMenu1H" class="BtnMenu1H dropbtn2" style="width: 100%;">Harian</button>
			<button value="Bulanan" name="BtnMenu1B" id="BtnMenu1B" class="BtnMenu1B dropbtn2" style="width: 100%;">Bulanan</button>
		  </div>
	</div>
	<div class="dropdown">
		<button onclick="myFunctionDrop2()" class="dropbtn">Grid & Kontur Map</button>
		  <div id="myDropdown2" class="dropdown-content">
			  <button value="Harian" name="BtnMenuGDH" id="BtnMenuGDH" class="BtnMenuGDH dropbtn2" style="width: 100%;">Harian</button>
			  <button value="Bulanan" name="BtnMenuGDB" id="BtnMenuGDB" class="BtnMenuGDB dropbtn2" style="width: 100%;">Bulanan</button>
			  <button value="Tahunan" name="BtnMenuGDB" id="BtnMenuGDB" class="BtnMenuGDB dropbtn2" style="width: 100%;">Tahunan</button>
			  <button value="Log" name="BtnMenuGDL" id="BtnMenuGDL" class="BtnMenuGDL dropbtn2" style="width: 100%;">Log Sambaran</button>
		  </div>
	</div>
	  	<button value="ConvertData" name="BtnMenuCD" id="BtnMenuCD" class="BtnMenuCD dropbtn">Convert Data</button>
	  	<button value="KatalogData" name="BtnMenuKD" id="BtnMenuKD" class="BtnMenuKD dropbtn">Katalog Data</button>
	<div class="dropdown">
		<button onclick="myFunctionDrop4()" class="dropbtn">Lain-lain</button>
		  <div id="myDropdown4" class="dropdown-content">
			<button value="Pengguna" name="BtnMenu3P" id="BtnMenu3P" class="BtnMenu3P dropbtn2" style="width: 100%;">Tambah Pengguna</button>
			<button value="Koordinat" name="BtnMenu3K" id="BtnMenu3K" class="BtnMenu3K dropbtn2" style="width: 100%;">Tambah Koordinat Daerah</button>
		  </div>
	</div>
	<div id="DataBody"></div>
  </center>
</section>


<!-- Copyright section -->
<section id="copyright">
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-sm-8 col-xs-8">
        <p><font size="-1">Version 4.326</font><br>Copyright © BMKG Sanglah Denpasar - Powered by <a class="designed-by" href="http://techtonasystem.com" target="_blank">Techtona System</a></p>
      </div>  

    </div>
  </div>
</section>

<!-- javscript js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js?u=2"></script>

</body>
</html>