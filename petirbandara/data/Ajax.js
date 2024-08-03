function myFunctionDrop1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}
function myFunctionDrop2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
function myFunctionDrop3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}
function myFunctionDrop4() {
    document.getElementById("myDropdown4").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

$(document).ready(function(){
	$.ajax({
		url:"data/ListData.php?",
		success:function(data)
		{
			$('#DataBody').html(data);
		}
	});
		$('button.BtnMenu1H').click(function(){
			var BtnMenu1H = $('#BtnMenu1H').val();
			if(BtnMenu1H == 'Harian')
			{
				$('#myModalHarian').modal('show');
			}
		});
		$('button.BtnMenu1B').click(function(){
			var BtnMenu1B = $('#BtnMenu1B').val();
			if(BtnMenu1B == 'Bulanan')
			{
				$('#myModalBulanan').modal('show');
			}
		});
		$('button.BtnMenuGDH').click(function(){
			var BtnMenu1H = $('#BtnMenuGDH').val();
			if(BtnMenu1H == 'Harian')
			{
				$('#myModalGridDataPetir').modal('show');
			}
		});
		$('button.BtnMenuGDB').click(function(){
			var BtnMenu1B = $('#BtnMenuGDB').val();
			if(BtnMenu1B == 'Bulanan')
			{
				$('#myModalGridDataPetirBulanan').modal('show');
			}
		});
		
		$('button.BtnMenuGDL').click(function(){
			var BtnMenu1L = $('#BtnMenuGDL').val();
			if(BtnMenu1L == 'Log')
			{
				$('#myModalLogGridDataPetir').modal('show');
			}
		});
		$('button.BtnMenu2').click(function(){
			var BtnMenu2 = $('#BtnMenu2').val();
			if(BtnMenu2 == 'DaftarPermohonanData')
			{
				$.ajax({
					url:"data/ListData.php",
					success:function(data)
					{
						$('#DataBody').html(data);
					}
				});
			}
		});
		$('button.BtnMenuCD').click(function(){
			var BtnMenuCD = $('#BtnMenuCD').val();
			if(BtnMenuCD == 'ConvertData')
			{
				$('#myModalConvertData').modal('show');
			}
		});
		$('button.BtnMenuKD').click(function(){
			var BtnMenuKD = $('#BtnMenuKD').val();
			if(BtnMenuKD == 'KatalogData')
			{
				$.ajax({
					url:"data/KatalogData.php",
					success:function(data)
					{
						$('#DataBody').html(data);
					}
				});
			}
		});
		$('button.BtnMenu3P').click(function(){
			var BtnMenu3P = $('#BtnMenu3P').val();
			if(BtnMenu3P == 'Pengguna')
			{
				$('#myModalPengguna').modal('show');
			}
		});
		$('button.BtnMenu3K').click(function(){
			var BtnMenu3K = $('#BtnMenu3K').val();
			if(BtnMenu3K == 'Koordinat')
			{
				$('#myModalDaerah').modal('show');
			}
		});
	});

function loginForm() {
			var user = document.forms["login-form"]["usr"].value;
			var password = document.forms["login-form"]["pw"].value;
			
			if(user !== '' && password !== '')
			{
				$.ajax({
				type : 'POST',
				url  : 'data/access.php',
				data : {user,password},
				cache: false,
				beforeSend: function(){ $("#btn-login").val('LOGIN');},
				success : function(response)
			   	{
					if(response=="OK")
					{
						window.location.href = "page.php";
					}
					else if(response=="GAGAL")
					{
						alert("User atau Password salah!");
						return false;
					}
				}
				});
			}
			return false;
		};

function UbahPassword() {
			var NIP				= document.forms["UPass-Form"]["NIP"].value;
			var passbaru		= document.forms["UPass-Form"]["passbaru"].value;
			var ulangpassbaru	= document.forms["UPass-Form"]["ulangpassbaru"].value;
			
			if(passbaru == ulangpassbaru)
			{
				$.ajax({
				type : 'POST',
				url  : 'data/chg.php',
				data : {NIP,passbaru},
				cache: false,
				beforeSend: function(){ $("#btn-UPass").val('Simpan');},
				success : function(response)
			   	{
					if(response=="OK")
					{
						alert("Berhasil ubah password");
						$('#myModal').modal('hide');
					}
					else if(response=="GAGAL")
					{
						alert("Gagal ubah password");
						return false;
					}
				}
				});
			}
			else
			{
				alert("Password tidak sesuai");
				return false;
			}
			return false;
		};

function TambahPengguna() {
			var NIP				= document.forms["TPengguna-Form"]["NIP"].value;
			var addNIP			= document.forms["TPengguna-Form"]["addNIP"].value;
			var addNama			= document.forms["TPengguna-Form"]["addNama"].value;
			var addUsr			= document.forms["TPengguna-Form"]["addUsr"].value;
			var StatusPengguna	= document.forms["TPengguna-Form"]["StatusPengguna"].value;
			var addPwd			= document.forms["TPengguna-Form"]["addPwd"].value;
			var readdPwd		= document.forms["TPengguna-Form"]["readdPwd"].value;
			
			if(addPwd == readdPwd)
			{
				$.ajax({
				type : 'POST',
				url  : 'data/addUsr.php',
				data : {NIP,addNIP,addNama,addUsr,StatusPengguna,addPwd},
				cache: false,
				beforeSend: function(){ $("#btn-TPengguna").val('Simpan');},
				success : function(response)
			   	{
					if(response=="OK")
					{
						alert("Berhasil Menambah Pengguna");
						$('#myModalPengguna').modal('hide');
					}
					else if(response=="GAGAL")
					{
						alert("Gagal Menambah Pengguna");
						return false;
					}
				}
				});
			}
			else
			{
				alert("Password tidak sesuai");
				return false;
			}
			return false;
		};

function TambahKoordinat() {
			var NIP				= document.forms["TKoordinat-Form"]["NIP"].value;
			var DaerahLatLong	= document.forms["TKoordinat-Form"]["DaerahLatLong"].value;
			var Latitude		= document.forms["TKoordinat-Form"]["Latitude"].value;
			var Longitude		= document.forms["TKoordinat-Form"]["Longitude"].value;
			
			if(NIP !== "")
			{
				$.ajax({
				type : 'POST',
				url  : 'data/addLatLong.php',
				data : {NIP,DaerahLatLong,Latitude,Longitude},
				cache: false,
				beforeSend: function(){ $("#btn-TKoordinat").val('Simpan');},
				success : function(response)
			   	{
					if(response=="OK")
					{
						alert("Berhasil Menambah Koordinat Daerah");
						$('#myModalDaerah').modal('hide');
					}
					else if(response=="GAGAL")
					{
						alert("Gagal Menambah Koordinat Daerah");
						return false;
					}
				}
				});
			}
			else
			{
				alert("Gagal Menambah Koordinat Daerah");
				return false;
			}
			return false;
		};

function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('time').innerHTML = "Jam : " + h + ":" + m + ":" + s + " WITA";
			var t = setTimeout(startTime, 500);
	
			var waktu = h + ":" + m + ":" + s;
			if(waktu=="13:00:00")
			{
				$.ajax({
				type : 'POST',
				url  : 'data/autorun_backup/www/ConvertCSV.php',
				cache: false,
				success : function(response)
			   	{
					if(response=="GAGAL")
					{
						alert("Gagal Auto Convert CSV");
					}
				}
				});
			}
}
function checkTime(i) {
			if (i < 10) {i = "0" + i};
			return i;
		}
