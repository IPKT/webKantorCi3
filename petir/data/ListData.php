<?php
include "validation.php";
include "connection.php";
	
	$ModalcekPemohon=$mysqli->query("SELECT * FROM tb_pemohon ORDER BY IDPemohon DESC");
	while($Modalpemohon=mysqli_fetch_array($ModalcekPemohon))
	{
		$ModalIDPemohon=$Modalpemohon['IDPemohon'];
		$ModalTGLPermohonan=$Modalpemohon['TGLPermohonan'];
		$ModalBLNPermohonan=$Modalpemohon['BLNPermohonan'];
		$ModalTHNPermohonan=$Modalpemohon['THNPermohonan'];
		$NamaPemohon=$Modalpemohon['NamaPemohon'];
		$PekerjaanPemohon=$Modalpemohon['PekerjaanPemohon'];
		$PerBidPemohon=$Modalpemohon['PerBidPemohon'];
		$Alamat=$Modalpemohon['Alamat'];
		$KodePosPemohon=$Modalpemohon['KodePosPemohon'];
		$KartuIdentitas=$Modalpemohon['KartuIdentitas'];
		$NoKartu=$Modalpemohon['NoKartu'];
		$TeleponPemohon=$Modalpemohon['TeleponPemohon'];
		$JenisData=$Modalpemohon['JenisData'];
		$DiperUtkPemohon=$Modalpemohon['DiperUtkPemohon'];
		$TGLPemohon=$Modalpemohon['TGLPemohon'];
		$BLNPemohon=$Modalpemohon['BLNPemohon'];
		$THNPemohon=$Modalpemohon['THNPemohon'];
		$JAMPemohon=$Modalpemohon['JAMPemohon'];
		$MNTPemohon=$Modalpemohon['MNTPemohon'];
		$IDLatLong=$Modalpemohon['IDLatLong'];
			$listIDLatLong=$mysqli->query("SELECT * FROM tb_latlong WHERE IDLatLong='$IDLatLong'");
            	$tampunglistIDLatLong=mysqli_fetch_array($listIDLatLong);
            	$DaerahLatLong=$tampunglistIDLatLong['DaerahLatLong'];
		$ModalNoSurat=$Modalpemohon['NoSurat'];
		$ModalNoBeritaPetir=$Modalpemohon['NoBeritaPetir'];
		$ModalNoKwitansi1=$Modalpemohon['NoKwitansi1'];
		$ModalJumKWa=$Modalpemohon['JumlahKWa'];
		$ModalTerKWa=$Modalpemohon['TerbilangKWa'];
		$ModalNoKwitansi2=$Modalpemohon['NoKwitansi2'];
		$ModalJumKWb=$Modalpemohon['JumlahKWb'];
		$ModalTerKWb=$Modalpemohon['TerbilangKWb'];
		
		$NamaDetail="myModalDetail".$ModalIDPemohon;
		$NamaModal="myModalUbah".$ModalIDPemohon;
?>

	<div class="modal fade" id="<?php echo $NamaDetail; ?>" role="dialog" style="padding-top: 70px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">   
                        <h4 class="modal-title">Detail Data Permohonan</h4>
                    </div>
                    <div class="modal-body">
                            <table border="0">
                                <tr>
                                    <td width="150px">
                                    	Tanggal Permohonan
                                    </td>
                                    <td>
                                        &nbsp;: <?php echo $ModalTGLPermohonan." / ".$ModalBLNPermohonan." / ".$ModalTHNPermohonan; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Nama Pemohon
                                    </td>
                                    <td>
                                        &nbsp;:
                                        <?php
                                        	if($NamaPemohon=="")
											{ echo "-"; }
											else
											{ echo $NamaPemohon; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    	Pekerjaan
                                    </td>
                                    <td>
                                        &nbsp;:
                                        <?php
                                        	if($PekerjaanPemohon=="")
											{ echo "-"; }
											else
											{ echo $PekerjaanPemohon; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Nama Kantor
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php
                                        	if($PerBidPemohon=="")
											{ echo "-"; }
											else
											{ echo $PerBidPemohon; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    	Alamat
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php
                                        	if($Alamat=="")
											{ echo "-"; }
											else
											{ echo $Alamat; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Kode Pos
                                    </td>
                                    <td>
                                        &nbsp;:
                                        <?php
                                        	if($KodePosPemohon=="")
											{ echo "-"; }
											else
											{ echo $KodePosPemohon; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    	Kartu Identitas
                                    </td>
                                    <td>
                                        &nbsp;:
                                        <?php
                                        	if($KartuIdentitas=="")
											{ echo "-"; }
											else
											{ echo $KartuIdentitas."<br>&nbsp;&nbsp;&nbsp;".$NoKartu; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Telepon
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php
                                        	if($TeleponPemohon=="")
											{ echo "-"; }
											else
											{ echo $TeleponPemohon; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Jenis Data
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php
                                        	if($JenisData=="")
											{ echo "-"; }
											else
											{ echo $JenisData; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Tujuan Data
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php
                                        	if($DiperUtkPemohon=="")
											{ echo "-"; }
											else
											{ echo $DiperUtkPemohon; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Tanggal Sambaran Petir
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php
                                        	if($TGLPemohon=="" && $BLNPemohon=="" && $THNPemohon=="")
											{ echo "-"; }
											else
											{ echo $TGLPemohon."/".$BLNPemohon."/".$THNPemohon; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Jam Sambaran Petir
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php
                                        	if($JAMPemohon=="" && $MNTPemohon=="")
											{ echo "-"; }
											else
											{ echo $JAMPemohon." : ".$MNTPemohon." WITA"; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    	Daerah Sambaran Petir
                                    </td>
                                    <td>
                                        &nbsp;: 
                                        <?php
                                        	if($DaerahLatLong=="")
											{ echo "-"; }
											else
											{ echo $DaerahLatLong; }
										?>
                                    </td>
                                </tr>
                            </table>
							<hr>
                            <table border="0">
                                <tr>
                                    <td width="150px">
                                    	No Surat
                                    </td>
                                    <td>
                                        &nbsp;: 
										<?php
                                        	if($ModalNoSurat=="")
											{ echo "-"; }
											else
											{ echo $ModalNoSurat; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="150px">
                                    	No Berita Petir
                                    </td>
                                    <td>
                                        &nbsp;:
                                        <?php
                                        	if($ModalNoBeritaPetir=="")
											{ echo "-"; }
											else
											{ echo $ModalNoBeritaPetir; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="150px">
                                    	No Kwitansi a
                                    </td>
                                    <td>
                                        &nbsp;:
                                        <?php
                                        	if($ModalNoKwitansi1=="")
											{ echo "-"; }
											else
											{ echo $ModalNoKwitansi1; }
										?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="150px">
                                    	No Kwitansi b
                                    </td>
                                    <td>
                                        &nbsp;:
                                        <?php
                                        	if($ModalNoKwitansi2=="")
											{ echo "-"; }
											else
											{ echo $ModalNoKwitansi2; }
										?>
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#bc3c3c;" onclick="BtnHapus(<?php echo $ModalIDPemohon; ?>)" ><font color="#FFFFFF">Hapus</font></button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
            </div>
        </div>
    </div>
	
<?php
	}
?>
	
	<script type="text/javascript">						  
		function BtnHapus(BtnHapus){
			if(BtnHapus !== '')
			{
				$.ajax({
					url:"data/DelWishlist.php?ID="+BtnHapus,
					success : function(response)
					{
						if(response=="OK")
						{
							alert("Berhasil Menghapus Data");
							$("#DataBody").load('data/ListData.php');
							$('#myModalDetail'+BtnHapus).modal('hide');
							return false;
						}
						else if(response=="GAGAL")
						{
							alert("Gagal Menghapus Data");
							return false;
						}
					}
				});
			}
		};
		
		function TambahDataPermohonan() {
			var TGLPermohonan	= document.forms["TDataPermohonan-Form"]["TGLPermohonan"].value;
			var BLNPermohonan	= document.forms["TDataPermohonan-Form"]["BLNPermohonan"].value;
			var THNPermohonan	= document.forms["TDataPermohonan-Form"]["THNPermohonan"].value;
			var NamaPemohon		= document.forms["TDataPermohonan-Form"]["NamaPemohon"].value;
			var PekerjaanPemohon= document.forms["TDataPermohonan-Form"]["PekerjaanPemohon"].value;
			var PerBidPemohon	= document.forms["TDataPermohonan-Form"]["PerBidPemohon"].value;
			var Alamat			= document.forms["TDataPermohonan-Form"]["Alamat"].value;
			var KodePosPemohon	= document.forms["TDataPermohonan-Form"]["KodePosPemohon"].value;
			var KartuIdentitas	= document.forms["TDataPermohonan-Form"]["KartuIdentitas"].value;
			var NoKartu			= document.forms["TDataPermohonan-Form"]["NoKartu"].value;
			var TeleponPemohon	= document.forms["TDataPermohonan-Form"]["TeleponPemohon"].value;
			var JenisData		= document.forms["TDataPermohonan-Form"]["JenisData"].value;
			var DiperUtkPemohon	= document.forms["TDataPermohonan-Form"]["DiperUtkPemohon"].value;
			var TGLPemohon		= document.forms["TDataPermohonan-Form"]["TGLPemohon"].value;
			var BLNPemohon		= document.forms["TDataPermohonan-Form"]["BLNPemohon"].value;
			var THNPemohon		= document.forms["TDataPermohonan-Form"]["THNPemohon"].value;
			var JAMPemohon		= document.forms["TDataPermohonan-Form"]["JAMPemohon"].value;
			var MNTPemohon		= document.forms["TDataPermohonan-Form"]["MNTPemohon"].value;
			var IDLatLong		= document.forms["TDataPermohonan-Form"]["IDLatLong"].value;
			var NIP				= document.forms["TDataPermohonan-Form"]["NIP"].value;
			
			if(NIP !== "")
			{
				$.ajax({
				type : 'POST',
				url  : 'data/SaveWishlist.php',
				data : {TGLPermohonan,BLNPermohonan,THNPermohonan,NamaPemohon,PekerjaanPemohon,PerBidPemohon,Alamat,KodePosPemohon,KartuIdentitas,NoKartu,TeleponPemohon,JenisData,DiperUtkPemohon,TGLPemohon,BLNPemohon,THNPemohon,JAMPemohon,MNTPemohon,IDLatLong,NIP},
				cache: false,
				beforeSend: function(){ $("#btn-TDataPermohonan").val('Simpan');},
				success : function(response)
			   	{
					if(response=="OK")
					{
						alert("Berhasil Menambah Data Permohonan");
						$("#DataBody").load('data/ListData.php');
						$('#myModalDataBaru').modal('hide');
						return false;
					}
					else if(response=="GAGAL")
					{
						alert("Gagal Menambah Data Permohonan");
						return false;
					}
				}
				});
			}
			else
			{
				alert("Gagal Menambah Data Permohonan");
				return false;
			}
			return false;
		};
		
		function UbahDataPermohonan(UbahDataPermohonan){
			$.ajax({
			url:"data/FormUpdateWishlist.php",
			method:"POST",
			data:{UbahDataPermohonan:UbahDataPermohonan},
			success:function(data)
			{
				$('#Ubah').html(data);
			}
			});
		}
	</script>

    

<script>
var dataSet = [
<?php
	$no=0;
	$cekPemohon=$mysqli->query("SELECT * FROM tb_pemohon ORDER BY IDPemohon DESC");
	while($pemohon=mysqli_fetch_array($cekPemohon))
	{
		$no++;
		$IDPemohon=$pemohon['IDPemohon'];
		$NamaPemohon=$pemohon['NamaPemohon'];
		$PerBidPemohon=$pemohon['PerBidPemohon'];
		$TGLPemohon=$pemohon['TGLPemohon'];
		$BLNPemohon=$pemohon['BLNPemohon'];
		$THNPemohon=$pemohon['THNPemohon'];
		$TeleponPemohon=$pemohon['TeleponPemohon'];
		$IDLatLong=$pemohon['IDLatLong'];
			$cekLatLong=$mysqli->query("SELECT * FROM tb_latlong WHERE IDLatLong='$IDLatLong'");
			$latlong=mysqli_fetch_array($cekLatLong);
				$DaerahLatLong=$latlong['DaerahLatLong'];
		$DiperUtkPemohon=$pemohon['DiperUtkPemohon'];
		$NoSurat=$pemohon['NoSurat'];
		$NoBeritaPetir=$pemohon['NoBeritaPetir'];
		$NoKwitansi1=$pemohon['NoKwitansi1'];
		$NoKwitansi2=$pemohon['NoKwitansi2'];
			
		$Tombol="<a href='data/cetak/cekdata.php?id=$IDPemohon' target='_blank' style='cursor:pointer;  padding-left:3px;  padding-right:3px;'><img src='img/cek.png' width='35px' title='CHECK'></a>";
		
		$TombolDetail="<a data-toggle='modal' data-target='#myModalDetail$IDPemohon' target='_blank' style='cursor:pointer; padding-left:3px;  padding-right:3px;'><img src='img/detail.png' width='35px' title='DETAIL'></a>";

		$TombolUbah="<a data-toggle='modal' data-target='#myModalUbah' onclick='UbahDataPermohonan($IDPemohon)' style='cursor:pointer; padding-left:3px;  padding-right:3px;'><img src='img/edit.png' width='35px' title='EDIT'></a>";
?>
		[ 
		"<?php echo $no; ?>",
		"<?php echo $TGLPemohon."-".$BLNPemohon."-".$THNPemohon; ?>",
		"<?php echo $NamaPemohon; ?>",
		"<?php echo $PerBidPemohon; ?>",
		"<?php echo $TeleponPemohon; ?>",
		"<?php echo $DiperUtkPemohon; ?>",
		"<center><?php echo $TombolDetail." ".$TombolUbah." ".$Tombol; ?></center>"
		],
<?php
	}
?>
];
	
$(document).ready(function() {
    $('#example').DataTable( {
        data: dataSet,
        columns: [
			{ title: "No" },
			{ title: "Waktu Kejadian" },
            { title: "Nama Pemohon" },
            { title: "Nama Kantor" },
			{ title: "Nomor Telepon" },
			{ title: "Tujuan Data" },
			{ title: "<center>Aksi</center>" }
        ]
    } );
} );
</script>

<center><h3>Daftar Permohonan Data</h3></center>
<button data-toggle='modal' data-target='#myModalDataBaru' class="dropbtn" style="padding: 5px;">Tambah Data Permohonan</button>
<table width="85%">
		<tr>
			<td>
				<table id="example" class="displayTable" width="100%"></table>
			</td>
		</tr>
</table>
<script type="text/javascript">