<?php
	include "connection.php";
	include "validation.php";
	
	$UbahDataPermohonan=$_POST['UbahDataPermohonan'];

$ModalcekPemohon2=$mysqli->query("SELECT * FROM tb_pemohon WHERE IDPemohon='$UbahDataPermohonan'");
$Modalpemohon2=mysqli_fetch_array($ModalcekPemohon2);
	$ModalIDPemohon2=$Modalpemohon2['IDPemohon'];
	$ModalTGLPermohonan2=$Modalpemohon2['TGLPermohonan'];
	$ModalBLNPermohonan2=$Modalpemohon2['BLNPermohonan'];
	$ModalTHNPermohonan2=$Modalpemohon2['THNPermohonan'];
	$NamaPemohon2=$Modalpemohon2['NamaPemohon'];
	$PekerjaanPemohon2=$Modalpemohon2['PekerjaanPemohon'];
	$PerBidPemohon2=$Modalpemohon2['PerBidPemohon'];
	$Alamat2=$Modalpemohon2['Alamat'];
	$KodePosPemohon2=$Modalpemohon2['KodePosPemohon'];
	$KartuIdentitas2=$Modalpemohon2['KartuIdentitas'];
	$NoKartu2=$Modalpemohon2['NoKartu'];
	$TeleponPemohon2=$Modalpemohon2['TeleponPemohon'];
	$JenisData2=$Modalpemohon2['JenisData'];
	$DiperUtkPemohon2=$Modalpemohon2['DiperUtkPemohon'];
	$TGLPemohon2=$Modalpemohon2['TGLPemohon'];
	$BLNPemohon2=$Modalpemohon2['BLNPemohon'];
	$THNPemohon2=$Modalpemohon2['THNPemohon'];
	$JAMPemohon2=$Modalpemohon2['JAMPemohon'];
	$MNTPemohon2=$Modalpemohon2['MNTPemohon'];
	$IDLatLong2=$Modalpemohon2['IDLatLong'];
		$listIDLatLong2=$mysqli->query("SELECT * FROM tb_latlong WHERE IDLatLong='$IDLatLong'");
           	$tampunglistIDLatLong2=mysqli_fetch_array($listIDLatLong2);
           	$DaerahLatLong2=$tampunglistIDLatLong2['DaerahLatLong'];
	$ModalNoSurat2=$Modalpemohon2['NoSurat'];
	$ModalNoBeritaPetir2=$Modalpemohon2['NoBeritaPetir'];
	$ModalNoKwitansi12=$Modalpemohon2['NoKwitansi1'];
	$ModalJumKWa2=$Modalpemohon2['JumlahKWa'];
	$ModalTerKWa2=$Modalpemohon2['TerbilangKWa'];
	$ModalNoKwitansi22=$Modalpemohon2['NoKwitansi2'];
	$ModalJumKWb2=$Modalpemohon2['JumlahKWb'];
	$ModalTerKWb2=$Modalpemohon2['TerbilangKWb'];
?>
	<script type="text/javascript">
		function SimpanUbahDataPermohonan(){
			var NIP				= document.forms["UDataPermohonan-Form"]["NIP"].value;
			var IDPemohon		= document.forms["UDataPermohonan-Form"]["IDPemohon"].value;
			var TGLPermohonan	= document.forms["UDataPermohonan-Form"]["TGLPermohonan"].value;
			var BLNPermohonan	= document.forms["UDataPermohonan-Form"]["BLNPermohonan"].value;
			var THNPermohonan	= document.forms["UDataPermohonan-Form"]["THNPermohonan"].value;
			var NamaPemohon		= document.forms["UDataPermohonan-Form"]["NamaPemohon"].value;
			var PekerjaanPemohon= document.forms["UDataPermohonan-Form"]["PekerjaanPemohon"].value;
			var PerBidPemohon	= document.forms["UDataPermohonan-Form"]["PerBidPemohon"].value;
			var Alamat			= document.forms["UDataPermohonan-Form"]["Alamat"].value;
			var KodePosPemohon	= document.forms["UDataPermohonan-Form"]["KodePosPemohon"].value;
			var KartuIdentitas	= document.forms["UDataPermohonan-Form"]["KartuIdentitas"].value;
			var NoKartu			= document.forms["UDataPermohonan-Form"]["NoKartu"].value;
			var TeleponPemohon	= document.forms["UDataPermohonan-Form"]["TeleponPemohon"].value;
			var JenisData		= document.forms["UDataPermohonan-Form"]["JenisData"].value;
			var DiperUtkPemohon	= document.forms["UDataPermohonan-Form"]["DiperUtkPemohon"].value;
			var TGLPemohon		= document.forms["UDataPermohonan-Form"]["TGLPemohon"].value;
			var BLNPemohon		= document.forms["UDataPermohonan-Form"]["BLNPemohon"].value;
			var THNPemohon		= document.forms["UDataPermohonan-Form"]["THNPemohon"].value;
			var JAMPemohon		= document.forms["UDataPermohonan-Form"]["JAMPemohon"].value;
			var MNTPemohon		= document.forms["UDataPermohonan-Form"]["MNTPemohon"].value;
			var IDLatLong		= document.forms["UDataPermohonan-Form"]["IDLatLong"].value;
			var NoSurat			= document.forms["UDataPermohonan-Form"]["NoSurat"].value;
			var NoBeritaPetir	= document.forms["UDataPermohonan-Form"]["NoBeritaPetir"].value;
			var NoKwitansi1		= document.forms["UDataPermohonan-Form"]["NoKwitansi1"].value;
			var JumlahKWa		= document.forms["UDataPermohonan-Form"]["JumlahKWa"].value;
			var TerbilangKWa	= document.forms["UDataPermohonan-Form"]["TerbilangKWa"].value;
			var NoKwitansi2		= document.forms["UDataPermohonan-Form"]["NoKwitansi2"].value;
			var JumlahKWb		= document.forms["UDataPermohonan-Form"]["JumlahKWb"].value;
			var TerbilangKWb	= document.forms["UDataPermohonan-Form"]["TerbilangKWb"].value;
			
			if(NIP !== "")
			{
				$.ajax({
				type : 'POST',
				url  : 'data/UpdateWishlist.php',
				data : {NIP,IDPemohon,TGLPermohonan,BLNPermohonan,THNPermohonan,NamaPemohon,PekerjaanPemohon,PerBidPemohon,Alamat,KodePosPemohon,KartuIdentitas,NoKartu,TeleponPemohon,JenisData,DiperUtkPemohon,TGLPemohon,BLNPemohon,THNPemohon,JAMPemohon,MNTPemohon,IDLatLong,NoSurat,NoBeritaPetir,NoKwitansi1,JumlahKWa,TerbilangKWa,NoKwitansi2,JumlahKWb,TerbilangKWb},
				cache: false,
				beforeSend: function(){ $("#btn-UDataPermohonan").val('Simpan');},
				success : function(response)
			   	{
					if(response=="OK")
					{
						alert("Berhasil Mengubah Data Permohonan");
						$("#DataBody").load('data/ListData.php');
						$('#myModalUbah').modal('hide');
						return false;
					}
					else if(response=="GAGAL")
					{
						alert("Gagal Mengubah Data Permohonan");
						return false;
					}
				}
				});
			}
			else
			{
				alert("Gagal Mengubah Data Permohonan");
				return false;
			}
			return false;
		};
	</script>

			<form method="post" name="UDataPermohonan-Form" onSubmit="return SimpanUbahDataPermohonan()">
                <input type="hidden" name="NIP" value="<?php echo $_SESSION['NIP']; ?>">
                <input type="hidden" name="IDPemohon" value="<?php echo $ModalIDPemohon2; ?>">
				<input type="hidden" name="TGLPermohonan" value="<?php echo $ModalTGLPermohonan2; ?>">
				<input type="hidden" name="BLNPermohonan" value="<?php echo $ModalBLNPermohonan2; ?>">
				<input type="hidden" name="THNPermohonan" value="<?php echo $ModalTHNPermohonan2; ?>">
                    <div class="modal-header">   
                        <h4 class="modal-title">Ubah Data Permohonan</h4>
                    </div>
                    <div class="modal-body">
                    		<table border="0" align="center">
                                <tr>
                                    <td>
                                    	Tanggal permohonan
                                    </td>
                                    <td>
                                        &nbsp;: <?php echo $ModalTGLPermohonan2." / ".$ModalBLNPermohonan2." / ".$ModalTHNPermohonan2; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Nama Pemohon
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="NamaPemohon" style="width:300px;" value="<?php echo $NamaPemohon2; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    	Pekerjaan
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php if($PekerjaanPemohon2=="Pegawai Swasta") { ?>
                                        <input type="radio" name="PekerjaanPemohon" value="Pegawai Swasta" checked="checked"> Pegawai Swasta &nbsp;&nbsp;
                                        <?php }else{ ?>
                                        <input type="radio" name="PekerjaanPemohon" value="Pegawai Swasta" > Pegawai Swasta &nbsp;&nbsp;
                                        <?php } ?>
                                        <?php if($PekerjaanPemohon2=="Pegawai Negeri") { ?>
                                        <input type="radio" name="PekerjaanPemohon" value="Pegawai Negeri" checked="checked" > Pegawai Negeri<br>&nbsp;&nbsp;
                                        <?php }else{ ?>
                                        <input type="radio" name="PekerjaanPemohon" value="Pegawai Negeri" > Pegawai Negeri<br>&nbsp;&nbsp;
                                        <?php } ?>
                                        <?php if($PekerjaanPemohon2=="Wiraswasta") { ?>
                                        <input type="radio" name="PekerjaanPemohon" value="Wiraswasta" checked="checked" > Wiraswasta &nbsp;&nbsp;
                                        <?php }else{ ?>
                                        <input type="radio" name="PekerjaanPemohon" value="Wiraswasta" > Wiraswasta &nbsp;&nbsp;
                                        <?php } ?>
                                        <?php if($PekerjaanPemohon2=="Wiraswasta") { ?>
                                        <input type="radio" name="PekerjaanPemohon" value="Lain-lain" checked="checked" > Lain-lain
                                        <?php }else{ ?>
                                        <input type="radio" name="PekerjaanPemohon" value="Lain-lain" > Lain-lain
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Nama Kantor
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="PerBidPemohon" style="width:300px;" value="<?php echo $PerBidPemohon2; ?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Alamat
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="Alamat" style="width:300px;" value="<?php echo $Alamat2; ?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Kode Pos
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="KodePosPemohon" style="width:100px;" value="<?php echo $KodePosPemohon2; ?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    	Kartu Identitas
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php if($KartuIdentitas2=="KTP") { ?>
                                        <input type="radio" name="KartuIdentitas" value="KTP" checked="checked" > KTP &nbsp;&nbsp;
                                        <?php }else{?>
                                        <input type="radio" name="KartuIdentitas" value="KTP" > KTP &nbsp;&nbsp;
                                        <?php } ?>
                                        <?php if($KartuIdentitas2=="SIM") { ?>
                                        <input type="radio" name="KartuIdentitas" value="SIM" checked="checked" > SIM <br>&nbsp;&nbsp;
                                        <?php }else{?>
                                        <input type="radio" name="KartuIdentitas" value="SIM" > SIM <br>&nbsp;&nbsp;
                                        <?php } ?>
                                        <input type="text" name="NoKartu" style="width:300px;" value="<?php echo $NoKartu2; ?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Telepon
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="TeleponPemohon" style="width:150px;" value="<?php echo $TeleponPemohon2; ?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Jenis Data
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="JenisData" style="width:300px;" value="<?php echo $JenisData2; ?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Tujuan Data
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" name="DiperUtkPemohon" style="width:300px;" value="<?php echo $DiperUtkPemohon2; ?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Tanggal Sambaran Petir
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <input type="text" name="TGLPemohon" style="width:30px;" value="<?php echo $TGLPemohon2; ?>" >&nbsp; /&nbsp;
                                        <input type="text" name="BLNPemohon" style="width:30px;" value="<?php echo $BLNPemohon2; ?>" >&nbsp; /&nbsp;
                                        <input type="text" name="THNPemohon" style="width:60px;" value="<?php echo $THNPemohon2; ?>" > Contoh : 01/01/2017
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Jam Sambaran Petir
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <input type="text" name="JAMPemohon" style="width:30px;" value="<?php echo $JAMPemohon2; ?>" >&nbsp; :&nbsp;
                                        <input type="text" name="MNTPemohon" style="width:30px;" value="<?php echo $MNTPemohon2; ?>" > WITA, &nbsp; Contoh : 23:59
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Daerah Sambaran Petir
                                    </td>
                                    <td>
                                        &nbsp;: <input type="text" list="IDLatLong" name="IDLatLong" style="width:300px;" value="<?php echo $IDLatLong2; ?>">
                                        <datalist id="IDLatLong" >
                                            <?php
                                                $list2=$mysqli->query("SELECT * FROM tb_latlong");
                                                while($tampunglist2=mysqli_fetch_array($list2))
                                                {
                                                    $TmpIDLatLong2=$tampunglist2['IDLatLong'];
                                                    $DaerahLatLong2=$tampunglist2['DaerahLatLong'];
													echo "<option value='$TmpIDLatLong2'>$DaerahLatLong2</option>";
                                                }
                                            ?>
                                        </datalist>
                                    </td>
                                </tr>
                                <tr>
                                    <td><hr></td>
                                <tr>
                                    <td>Nomor Surat</td>
                                    <td>&nbsp;: <input type="text" name="NoSurat" style="width:300px;" value="<?php echo $ModalNoSurat2; ?>" ></td>
                                </tr>
                                <tr>
                                    <td>Nomor Berita Petir</td>
                                    <td>&nbsp;: <input type="text" name="NoBeritaPetir" style="width:300px;" value="<?php echo $ModalNoBeritaPetir2; ?>" ></td>
                                </tr>
                                <tr>
                                    <td>Nomor Kwitansi a</td>
                                    <td>&nbsp;: <input type="text" name="NoKwitansi1" style="width:300px;" value="<?php echo $ModalNoKwitansi12; ?>" ></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp; - Jumlah</td>
                                    <td>&nbsp;: Rp. <input type="text" name="JumlahKWa" style="width:150px;" value="<?php echo $ModalJumKWa2; ?>" > Contoh : 100.000</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp; - Terbilang</td>
                                    <td>&nbsp;: <input type="text" name="TerbilangKWa" style="width:300px;" value="<?php echo $ModalTerKWa2; ?>" ></td>
                                </tr>
                                <tr>
                                    <td>Nomor Kwitansi b</td>
                                    <td>&nbsp;: <input type="text" name="NoKwitansi2" style="width:300px;" value="<?php echo $ModalNoKwitansi22; ?>" ></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp; - Jumlah</td>
                                    <td>&nbsp;: Rp. <input type="text" name="JumlahKWb" style="width:150px;" value="<?php echo $ModalJumKWa2; ?>" > Contoh : 100.000</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp; - Terbilang</td>
                                    <td>&nbsp;: <input type="text" name="TerbilangKWb" style="width:300px;" value="<?php echo $ModalTerKWb2; ?>"></td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btn-UDataPermohonan">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>